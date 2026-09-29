<?php

namespace App\Filament\Resources\CertificationLists\Pages;

use App\Filament\Resources\CertificationLists\CertificationListResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCertificationList extends ViewRecord
{
    protected static string $resource = CertificationListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
