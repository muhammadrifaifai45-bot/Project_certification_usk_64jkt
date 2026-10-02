<?php

namespace App\Filament\Widgets;

use App\Models\daftarpeserta;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class Peserta extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('Total Peserta Terdaftar', daftarpeserta::count())
            ->description('Jumlah seluruh peserta sertifikasi aktif')
            ->descriptionIcon('heroicon-m-user-group') 
            ->color('success') 
            ->chart([7, 3, 5, 2, 10, 4, daftarpeserta::count()]), 
           
        ];
    }
}
