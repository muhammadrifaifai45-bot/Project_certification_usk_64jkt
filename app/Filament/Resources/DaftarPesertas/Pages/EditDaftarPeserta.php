<?php

namespace App\Filament\Resources\DaftarPesertas\Pages;

use App\Filament\Resources\DaftarPesertas\DaftarPesertaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditDaftarPeserta extends EditRecord
{
    protected static string $resource = DaftarPesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
