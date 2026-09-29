<?php

namespace App\Filament\Resources\DaftarPesertas\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DaftarPesertaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('certification_list_id')
                    ->numeric(),
                TextEntry::make('nama_peserta'),
                TextEntry::make('nik'),
                TextEntry::make('gender')
                    ->badge(),
                TextEntry::make('alamat')
                    ->columnSpanFull(),
                ImageEntry::make('surat_image'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
