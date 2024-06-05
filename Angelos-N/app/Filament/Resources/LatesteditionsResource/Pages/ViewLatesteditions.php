<?php

namespace App\Filament\Resources\LatesteditionsResource\Pages;

use App\Filament\Resources\LatesteditionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLatesteditions extends ViewRecord
{
    protected static string $resource = LatesteditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
