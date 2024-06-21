<?php

namespace App\Filament\Resources\LaatstenieuwsResource\Pages;

use App\Filament\Resources\LaatstenieuwsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaatstenieuws extends ListRecords
{
    protected static string $resource = LaatstenieuwsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
