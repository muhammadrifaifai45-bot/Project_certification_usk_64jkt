<?php

namespace App\Filament\Resources\CertificationCodes\Pages;

use App\Filament\Resources\CertificationCodes\CertificationCodeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCertificationCode extends EditRecord
{
    protected static string $resource = CertificationCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
