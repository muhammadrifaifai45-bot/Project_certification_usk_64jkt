<?php

namespace App\Filament\Resources\DaftarPesertas\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DaftarPesertaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Peserta')
                ->schema([
                    TextEntry::make('certification_list_id')
                    ->numeric(),
                TextEntry::make('nama_peserta'),
                TextEntry::make('nik'),
                TextEntry::make('gender')
                    ->badge(),
                TextEntry::make('alamat')
                 ->columnSpanFull(),
                ])->columnSpan(1),
                
                Section::make('Dokumen Pendukung')
                ->schema([
                    ImageEntry::make('surat_image')
                    ->label('Dokumen Pendukng')
                ])
                
                // TextEntry::make('created_at')
                //     ->dateTime()
                //     ->placeholder('-'),
                // TextEntry::make('updated_at')
                //     ->dateTime()
                //     ->placeholder('-'),
            ]);
    }
}
