<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResultResource\Pages;
use App\Filament\Resources\ResultResource\RelationManagers;
use App\Models\Result;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ResultResource extends Resource
{
    protected static ?string $model = Result::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Academic Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Student & Subject')
                    ->schema([
                        Forms\Components\Select::make('student_id')
                            ->relationship('student', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('subject_id')
                            ->relationship('subject', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Exam Information')
                    ->schema([
                        Forms\Components\Select::make('exam_type')
                            ->options([
                                'mid-term' => 'Mid-Term',
                                'final' => 'Final',
                                'quiz' => 'Quiz',
                                'assignment' => 'Assignment',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('marks')
                            ->numeric()
                            ->required()
                            ->step(0.01)
                            ->minValue(0)
                            ->maxValue(100),
                        Forms\Components\TextInput::make('grade')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('term')
                            ->options([
                                'first' => 'First Term',
                                'second' => 'Second Term',
                                'third' => 'Third Term',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('year')
                            ->numeric()
                            ->required()
                            ->default(date('Y')),
                    ])->columns(2),

                Forms\Components\Section::make('Additional Information')
                    ->schema([
                        Forms\Components\Textarea::make('comment')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Select::make('recorded_by')
                            ->relationship('recordedBy', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exam_type')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('marks')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('grade')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('term')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('recordedBy.name')
                    ->sortable()
                    ->label('Recorded By')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('subject')
                    ->relationship('subject', 'name'),
                Tables\Filters\SelectFilter::make('exam_type')
                    ->options([
                        'mid-term' => 'Mid-Term',
                        'final' => 'Final',
                        'quiz' => 'Quiz',
                        'assignment' => 'Assignment',
                    ]),
                Tables\Filters\SelectFilter::make('term')
                    ->options([
                        'first' => 'First Term',
                        'second' => 'Second Term',
                        'third' => 'Third Term',
                    ]),
                Tables\Filters\Filter::make('year')
                    ->form([
                        Forms\Components\TextInput::make('year'),
                    ])
                    ->query(fn (Builder $query, array $data): Builder =>
                        $query->when($data['year'], fn($q) => $q->where('year', $data['year']))
                    ),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListResults::route('/'),
            'create' => Pages\CreateResult::route('/create'),
            'view' => Pages\ViewResult::route('/{record}'),
            'edit' => Pages\EditResult::route('/{record}/edit'),
        ];
    }
}
