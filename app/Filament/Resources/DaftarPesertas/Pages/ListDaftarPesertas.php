<?php

namespace App\Filament\Resources\DaftarPesertas\Pages;

use App\Filament\Resources\DaftarPesertas\DaftarPesertaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDaftarPesertas extends ListRecords
{
    protected static string $resource = DaftarPesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
