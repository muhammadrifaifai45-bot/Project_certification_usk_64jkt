<?php

namespace App\Filament\Resources\CertificationCodes\Pages;

use App\Filament\Resources\CertificationCodes\CertificationCodeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewCertificationCode extends ViewRecord
{
    protected static string $resource = CertificationCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
    public function getTitle(): string|Htmlable
    {
        return $this->record->daftarpeserta->nama_peserta;
    }

    public function getBreadcrumb(): string
    {
        return $this->record->daftarpeserta->nama_peserta;
    }
}
