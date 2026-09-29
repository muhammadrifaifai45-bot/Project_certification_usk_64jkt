<?php

namespace App\Filament\Resources\DaftarPesertas\Pages;

use App\Filament\Resources\DaftarPesertas\DaftarPesertaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewDaftarPeserta extends ViewRecord
{
    protected static string $resource = DaftarPesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    public function getTitle(): string|Htmlable
    {
        return $this->record->nama_peserta;
    }

    public function getBreadcrumb(): string
    {
        return $this->record->nama_peserta;
    }
}
