<?php

namespace App\Filament\Resources\CertificationLists\Pages;

use App\Filament\Resources\CertificationLists\CertificationListResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCertificationList extends EditRecord
{
    protected static string $resource = CertificationListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
