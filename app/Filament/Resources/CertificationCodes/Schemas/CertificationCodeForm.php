<?php

namespace App\Filament\Resources\CertificationCodes\Schemas;

use App\Models\daftarpeserta;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class CertificationCodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('daftarpeserta_id')
                    ->required()
                    ->relationship('daftarpeserta', 'nama_peserta')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->afterStateUpdated(function (?string $state, Set $set) {
                        if ($state) {
                            $daftarpeserta = daftarpeserta::find($state);

                            $set('nik', $daftarpeserta?->nik);
                            $set('gender', $daftarpeserta?->gender);
                            $set('alamat', $daftarpeserta?->alamat);
                            $set('surat_image', $daftarpeserta?->surat_image);
                        } else {
                        }
                    }),
                TextInput::make('nik')
                    ->label('Nik peserta')
                    ->disabled()
                    ->required(),
                TextInput::make('gender')
                    ->label('Gender/Jenis Kelamin')
                    ->disabled()
                    ->required(),
                TextInput::make('alamat')
                ->label('Alamat peserta')
                ->disabled()
                ->required(),

                TextInput::make('certification_code')
                    ->required(),
                Select::make('status')
                    ->options([
                        'Antrian' => 'Antrian',
                        'Verifikasi' => 'Verifikasi',
                        'DataTerverifikasi' => 'Data terverifikasi',
                    ])
                    ->default('Antrian')
                    ->required(),
            ]);
    }
}
