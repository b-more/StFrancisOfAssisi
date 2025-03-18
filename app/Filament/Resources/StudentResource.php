<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Student Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('date_of_birth')
                            ->required(),
                        Forms\Components\Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                                'other' => 'Other',
                            ])
                            ->required(),
                        Forms\Components\FileUpload::make('profile_photo')
                            ->image()
                            ->directory('student-photos')
                            ->maxSize(2048)
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('School Information')
                    ->schema([
                        Forms\Components\TextInput::make('student_id_number')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('grade')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('admission_date')
                            ->required(),
                        Forms\Components\Select::make('enrollment_status')
                            ->options([
                                'active' => 'Active',
                                'inactive' => 'Inactive',
                                'graduated' => 'Graduated',
                                'transferred' => 'Transferred',
                            ])
                            ->default('active')
                            ->required(),
                        Forms\Components\TextInput::make('previous_school')
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Parent/Guardian Information')
                    ->schema([
                        Forms\Components\Select::make('parent_guardian_id')
                            ->relationship('parentGuardian', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('phone')
                                    ->required()
                                    ->tel()
                                    ->maxLength(255),
                                Forms\Components\Select::make('relationship')
                                    ->options([
                                        'father' => 'Father',
                                        'mother' => 'Mother',
                                        'guardian' => 'Guardian',
                                        'other' => 'Other',
                                    ])
                                    ->required(),
                            ])
                            ->required(),
                    ]),

                Forms\Components\Section::make('Additional Information')
                    ->schema([
                        Forms\Components\Textarea::make('address')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('medical_information')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('notes')
                            ->maxLength(65535)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('grade')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('parentGuardian.name')
                    ->numeric()
                    ->sortable()
                    ->label('Parent/Guardian'),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('enrollment_status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'danger',
                        'graduated' => 'info',
                        'transferred' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('admission_date')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('enrollment_status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'graduated' => 'Graduated',
                        'transferred' => 'Transferred',
                    ]),
                Tables\Filters\SelectFilter::make('grade')
                    ->options(
                        Student::query()
                            ->distinct()
                            ->pluck('grade', 'grade')
                            ->toArray()
                    ),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('updateStatus')
                        ->label('Update Status')
                        ->icon('heroicon-o-pencil-square')
                        ->form([
                            Forms\Components\Select::make('enrollment_status')
                                ->options([
                                    'active' => 'Active',
                                    'inactive' => 'Inactive',
                                    'graduated' => 'Graduated',
                                    'transferred' => 'Transferred',
                                ])
                                ->required(),
                        ])
                        ->action(function (Builder $query, array $data): void {
                            $query->update(['enrollment_status' => $data['enrollment_status']]);
                        })
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\ResultsRelationManager::class,
            // RelationManagers\FeesRelationManager::class,
            // RelationManagers\HomeworkSubmissionsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            //'view' => Pages\ViewStudent::route('/{record}'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withCount('results')
            ->withCount('fees');
    }
}
