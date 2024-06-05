<?php

namespace App\Filament\Resources\LatesteditionsResource\Pages;

use App\Filament\Resources\LatesteditionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLatesteditions extends ListRecords
{
    protected static string $resource = LatesteditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
