<?php

namespace App\Filament\Resources\DaftarSertifikasis\Pages;

use App\Filament\Resources\DaftarSertifikasis\DaftarSertifikasiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDaftarSertifikasis extends ListRecords
{
    protected static string $resource = DaftarSertifikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
