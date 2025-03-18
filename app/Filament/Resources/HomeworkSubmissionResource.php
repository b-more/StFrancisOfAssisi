<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeworkSubmissionResource\Pages;
use App\Models\HomeworkSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class HomeworkSubmissionResource extends Resource
{
    protected static ?string $model = HomeworkSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationGroup = 'Academic Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('homework_id')
                    ->relationship('homework', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('student_id')
                    ->relationship('student', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('file_attachment')
                    ->directory('homework-submissions')
                    ->maxSize(10240) // 10MB
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('submitted_at')
                    ->required()
                    ->default(now()),
                Forms\Components\TextInput::make('marks')
                    ->numeric()
                    ->step(0.01)
                    ->minValue(0)
                    ->maxValue(100),
                Forms\Components\Textarea::make('feedback')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('homework.title')
                    ->label('Homework')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('student.name')
                    ->label('Student')
                    ->searchable(),
                Tables\Columns\TextColumn::make('submitted_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('marks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('homework')
                    ->relationship('homework', 'title'),
                Tables\Filters\SelectFilter::make('student')
                    ->relationship('student', 'name'),
                Tables\Filters\Filter::make('has_marks')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('marks'))
                    ->label('Graded Submissions')
                    ->toggle(),
                Tables\Filters\Filter::make('no_marks')
                    ->query(fn (Builder $query): Builder => $query->whereNull('marks'))
                    ->label('Ungraded Submissions')
                    ->toggle(),
                Tables\Filters\Filter::make('submitted_at')
                    ->form([
                        Forms\Components\DatePicker::make('from'),
                        Forms\Components\DatePicker::make('until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('submitted_at', '>=', $date),
                            )
                            ->when(
                                $data['until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('submitted_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('grade')
                    ->label('Grade Submission')
                    ->icon('heroicon-o-pencil-square')
                    ->form([
                        Forms\Components\TextInput::make('marks')
                            ->numeric()
                            ->required()
                            ->step(0.01)
                            ->minValue(0)
                            ->maxValue(100),
                        Forms\Components\Textarea::make('feedback')
                            ->required(),
                    ])
                    ->action(function ($record, array $data): void {
                        $record->update([
                            'marks' => $data['marks'],
                            'feedback' => $data['feedback'],
                        ]);
                    })
                    ->visible(fn ($record) => is_null($record->marks)),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeworkSubmissions::route('/'),
            'create' => Pages\CreateHomeworkSubmission::route('/create'),
            'view' => Pages\ViewHomeworkSubmission::route('/{record}'),
            'edit' => Pages\EditHomeworkSubmission::route('/{record}/edit'),
        ];
    }
}
