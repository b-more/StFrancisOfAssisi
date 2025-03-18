<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeeStructureResource\Pages;
use App\Filament\Resources\FeeStructureResource\RelationManagers;
use App\Models\FeeStructure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FeeStructureResource extends Resource
{
    protected static ?string $model = FeeStructure::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationGroup = 'Finance Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('grade')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('term')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('academic_year')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('basic_fee')
                    ->required()
                    ->numeric()
                    ->prefix('ZMW')
                    ->step(0.01),
                Forms\Components\Repeater::make('additional_charges')
                    ->schema([
                        Forms\Components\TextInput::make('description')
                            ->required(),
                        Forms\Components\TextInput::make('amount')
                            ->numeric()
                            ->required()
                            ->prefix('ZMW')
                            ->step(0.01),
                    ])
                    ->columns(2),
                Forms\Components\TextInput::make('total_fee')
                    ->required()
                    ->numeric()
                    ->prefix('ZMW')
                    ->step(0.01),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('grade')
                    ->searchable(),
                Tables\Columns\TextColumn::make('term')
                    ->searchable(),
                Tables\Columns\TextColumn::make('academic_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('basic_fee')
                    ->money('ZMW')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_fee')
                    ->money('ZMW')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('grade')
                    ->options(
                        FeeStructure::query()
                            ->distinct()
                            ->pluck('grade', 'grade')
                            ->toArray()
                    ),
                Tables\Filters\SelectFilter::make('term')
                    ->options(
                        FeeStructure::query()
                            ->distinct()
                            ->pluck('term', 'term')
                            ->toArray()
                    ),
                Tables\Filters\SelectFilter::make('academic_year')
                    ->options(
                        FeeStructure::query()
                            ->distinct()
                            ->pluck('academic_year', 'academic_year')
                            ->toArray()
                    ),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active Status')
                    ->placeholder('All fee structures')
                    ->trueLabel('Active fee structures')
                    ->falseLabel('Inactive fee structures')
                    ->queries(
                        true: fn (Builder $query) => $query->where('is_active', true),
                        false: fn (Builder $query) => $query->where('is_active', false),
                        blank: fn (Builder $query) => $query,
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
                    Tables\Actions\BulkAction::make('activate')
                        ->action(function (Builder $query) {
                            $query->update(['is_active' => true]);
                        })
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-check')
                        ->color('success')
                        ->requiresConfirmation(),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->action(function (Builder $query) {
                            $query->update(['is_active' => false]);
                        })
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-x-mark')
                        ->color('danger')
                        ->requiresConfirmation(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //RelationManagers\StudentFeesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeeStructures::route('/'),
            'create' => Pages\CreateFeeStructure::route('/create'),
            'view' => Pages\ViewFeeStructure::route('/{record}'),
            'edit' => Pages\EditFeeStructure::route('/{record}/edit'),
        ];
    }
}
