<?php

namespace App\Filament\Resources\CertificationCodes\Pages;

use App\Filament\Resources\CertificationCodes\CertificationCodeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCertificationCodes extends ListRecords
{
    protected static string $resource = CertificationCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
