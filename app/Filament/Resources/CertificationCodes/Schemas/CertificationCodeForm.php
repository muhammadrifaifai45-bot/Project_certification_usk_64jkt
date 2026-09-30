<?php

namespace App\Filament\Resources\CertificationCodes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CertificationCodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('daftarpeserta_id')
                    ->required()
                    ->numeric(),
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
