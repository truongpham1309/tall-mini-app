<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NftResource\Pages;
use App\Models\Nft;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class NftResource extends Resource
{
    protected static ?string $model = Nft::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('content')->required(),
            Forms\Components\TextInput::make('type')->required(),
            Forms\Components\TextInput::make('background'),
            Forms\Components\TextInput::make('row'),
            Forms\Components\TextInput::make('location'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->alignCenter(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Preview')
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->type === 'image') {
                            return "<img src='{$record->content}' style='height: 40px; border-radius: 6px;' />";
                        }

                        if ($record->type === 'button') {
                            return "<button class='shadow-[2px_2px_0px_0px_#000000] py-[17px] px-4 rounded-[17px] tracking-[2px] font-extrabold -rotate-6 uppercase {$record->background}'>
                                        {$record->content}
                                    </button>";
                        }

                        return $state;
                    })
                    ->html()->alignCenter(),
                Tables\Columns\TextColumn::make('type')->alignCenter(),
                Tables\Columns\TextColumn::make('row')->getStateUsing(fn($record) => $record->row + 1)->alignCenter()->sortable(),
            ])
            ->filters([
                SelectFilter::make('row')->label('Row')->options(fn () => Nft::pluck('row', 'row')->unique())->default(null),
                SelectFilter::make('type')->label('Type')->options(fn () => Nft::pluck('type', 'type')->unique())->default(null),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNfts::route('/'),
            'create' => Pages\CreateNft::route('/create'),
            'edit' => Pages\EditNft::route('/{record}/edit'),
        ];
    }
}
