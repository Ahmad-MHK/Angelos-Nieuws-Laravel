<?php

namespace App\Filament\Resources\LatesteditionsResource\Pages;

use App\Filament\Resources\LatesteditionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatesteditions extends EditRecord
{
    protected static string $resource = LatesteditionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
