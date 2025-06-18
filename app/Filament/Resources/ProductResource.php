<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Components\{TextInput, Select, FileUpload, RichEditor, Grid};
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('name')
                        ->required()
                        ->label('Title'),

                    TextInput::make('price')
                        ->numeric()
                        ->required()
                        ->label('Price'),
                ]),

                Grid::make(2)->schema([
                    TextInput::make('quantity')
                        ->numeric()
                        ->required()
                        ->label('Quantity'),

                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->label('Category'),
                ]),

                FileUpload::make('gallery')
                    ->imagePreviewHeight('100')
                    ->label('Gallery')
                    ->disk('public_folder')
                    ->directory('/images')
                    ->image()
                    ->imageEditor()
                    ->visibility('public'),

                RichEditor::make('description')
                    ->label('Description'),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->label('ID'),
                Tables\Columns\TextColumn::make('name')->searchable()->label('Title'),
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\ImageColumn::make('gallery')->label('Gallery')->disk('public_folder')
                    ->stacked()
                    ->limit(3)
                    ->height(100)
                    ->limitedRemainingText(),
                Tables\Columns\TextColumn::make('quantity')->label('Quantity'),
                Tables\Columns\TextColumn::make('category.name')->label('Category'),
                Tables\Columns\ToggleColumn::make('isDelete')
                    ->label('Status')
                    ->onColor('danger')
                    ->offColor('success')
                    ->onIcon('heroicon-o-x-circle')
                    ->offIcon('heroicon-o-check-circle')
            ])
            ->filters([
                SelectFilter::make('isDelete')->label('Status')
                ->options(fn () => Product::pluck('isDelete')->unique()
                ->map(fn ($value) => ($value === 0) ? 'Active' : 'Inactive'))->default(null),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
