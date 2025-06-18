<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OverviewResource\Pages;
use App\Models\Overview;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OverviewResource extends Resource
{
    protected static ?string $model = Overview::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->alignCenter(),
                Tables\Columns\TextColumn::make('title')->alignCenter(),
                Tables\Columns\TextColumn::make('icon')->formatStateUsing(function ($state, $record) {
                    preg_match('/#([A-Fa-f0-9]{6})/', $record->background, $matches);

                    $color = $matches[0] ?? null;
                    return "
                        <div style='background-color: {$color}; height: 50px; width: 50px; border-radius: 50%; padding: 6px; display: flex; justify-content: center; align-items: center;'>
                            <img src='{$state}' style='height: 40px;' />
                        </div>
                    ";
                })->html()->alignCenter(),
                Tables\Columns\TextColumn::make('description')->alignCenter(),
            ])
            ->filters([])
            ->actions([
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOverviews::route('/'),
            'create' => Pages\CreateOverview::route('/create'),
            'edit' => Pages\EditOverview::route('/{record}/edit'),
        ];
    }
}
