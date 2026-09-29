<?php

namespace App\Filament\Resources\DaftarSertifikasis\Pages;

use App\Filament\Resources\DaftarSertifikasis\DaftarSertifikasiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDaftarSertifikasi extends ViewRecord
{
    protected static string $resource = DaftarSertifikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
