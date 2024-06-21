<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaatstenieuwsResource\Pages;
use App\Filament\Resources\LaatstenieuwsResource\RelationManagers;
use App\Models\Laatstenieuws;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class LaatstenieuwsResource extends Resource
{
    protected static ?string $model = Laatstenieuws::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'News';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            TextInput::make('titel')
                ->required(),
            FileUpload::make('News')
                ->image()
                ->imageEditor()
                ->required(),
            TextInput::make('description')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('News')
                    ->circular(),
                TextColumn::make('titel'),
                TextColumn::make('description'),
            ])
            ->filters([
                //
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaatstenieuws::route('/'),
            'create' => Pages\CreateLaatstenieuws::route('/create'),
            'edit' => Pages\EditLaatstenieuws::route('/{record}/edit'),
        ];
    }
}
