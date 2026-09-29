<?php

namespace App\Filament\Resources\DaftarPesertas\Pages;

use App\Filament\Resources\DaftarPesertas\DaftarPesertaResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateDaftarPeserta extends CreateRecord
{
    protected static string $resource = DaftarPesertaResource::class;

 protected function getCreatedNotification() : ?Notification
{
   return Notification::make()
   ->success()
   ->icon('heroicon-o-check-circle')
   ->iconColor('success')
   ->title('Sukses mendaftarkan Peserta')
   ->body('Terimakasih Data anda Telah terdaftar dan sedang menunggu verifikasi selama 1x24jam')
   ->persistent();
}
}


