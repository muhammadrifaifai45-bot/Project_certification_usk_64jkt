<?php

namespace App\Filament\Resources\DaftarSertifikasis\Pages;

use App\Filament\Resources\DaftarSertifikasis\DaftarSertifikasiResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDaftarSertifikasi extends EditRecord
{
    protected static string $resource = DaftarSertifikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
