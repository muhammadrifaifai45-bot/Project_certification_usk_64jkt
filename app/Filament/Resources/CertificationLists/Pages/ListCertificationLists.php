<?php

namespace App\Filament\Resources\CertificationLists\Pages;

use App\Filament\Resources\CertificationLists\CertificationListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCertificationLists extends ListRecords
{
    protected static string $resource = CertificationListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
