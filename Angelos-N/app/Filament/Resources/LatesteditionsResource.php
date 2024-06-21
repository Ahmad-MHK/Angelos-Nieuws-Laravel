<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LatesteditionsResource\Pages;
use App\Filament\Resources\LatesteditionsResource\RelationManagers;
use App\Models\Latesteditions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;


class LatesteditionsResource extends Resource
{
    protected static ?string $model = Latesteditions::class;

    protected static ?string $navigationGroup = 'News';

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titel')
                    ->required(),
                FileUpload::make('image')
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
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                TextColumn::make('titel'),
                TextColumn::make('description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    // ->before(function (latesteditions $record) {
                    //     Storage::delete('public/' . $record->avatar);
                    // })
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
            'index' => Pages\ListLatesteditions::route('/'),
            'create' => Pages\CreateLatesteditions::route('/create'),
            'view' => Pages\ViewLatesteditions::route('/{record}'),
            'edit' => Pages\EditLatesteditions::route('/{record}/edit'),
        ];
    }
}
