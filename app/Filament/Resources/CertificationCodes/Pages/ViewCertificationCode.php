<?php

namespace App\Filament\Resources\CertificationCodes\Pages;

use App\Filament\Resources\CertificationCodes\CertificationCodeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCertificationCode extends ViewRecord
{
    protected static string $resource = CertificationCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
