<?php

namespace App\Filament\Resources\DaftarSertifikasis;

use App\Filament\Resources\DaftarSertifikasis\Pages\CreateDaftarSertifikasi;
use App\Filament\Resources\DaftarSertifikasis\Pages\EditDaftarSertifikasi;
use App\Filament\Resources\DaftarSertifikasis\Pages\ListDaftarSertifikasis;
use App\Filament\Resources\DaftarSertifikasis\Pages\ViewDaftarSertifikasi;
use App\Filament\Resources\DaftarSertifikasis\Schemas\DaftarSertifikasiForm;
use App\Filament\Resources\DaftarSertifikasis\Schemas\DaftarSertifikasiInfolist;
use App\Filament\Resources\DaftarSertifikasis\Tables\DaftarSertifikasisTable;
use App\Models\DaftarSertifikasi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DaftarSertifikasiResource extends Resource
{
    protected static ?string $model = DaftarSertifikasi::class;

    protected string|UnitEnum|null $navigationGroup = "Certification Management";

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-clipboard-document-list';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return DaftarSertifikasiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DaftarSertifikasiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DaftarSertifikasisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDaftarSertifikasis::route('/'),
            'create' => CreateDaftarSertifikasi::route('/create'),
            'view' => ViewDaftarSertifikasi::route('/{record}'),
            'edit' => EditDaftarSertifikasi::route('/{record}/edit'),
        ];
    }
}
