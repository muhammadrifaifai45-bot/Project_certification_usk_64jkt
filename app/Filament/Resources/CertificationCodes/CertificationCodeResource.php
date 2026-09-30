<?php

namespace App\Filament\Resources\CertificationCodes;

use App\Filament\Resources\CertificationCodes\Pages\CreateCertificationCode;
use App\Filament\Resources\CertificationCodes\Pages\EditCertificationCode;
use App\Filament\Resources\CertificationCodes\Pages\ListCertificationCodes;
use App\Filament\Resources\CertificationCodes\Pages\ViewCertificationCode;
use App\Filament\Resources\CertificationCodes\Schemas\CertificationCodeForm;
use App\Filament\Resources\CertificationCodes\Schemas\CertificationCodeInfolist;
use App\Filament\Resources\CertificationCodes\Tables\CertificationCodesTable;
use App\Models\CertificationCode;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CertificationCodeResource extends Resource
{
    protected static ?string $model = CertificationCode::class;
    protected static ?string $pluralLabel = "Certification Code";


    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-computer-desktop';
    protected static string|UnitEnum|null $navigationGroup = "Certification Management";


    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return CertificationCodeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CertificationCodeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CertificationCodesTable::configure($table);
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
            'index' => ListCertificationCodes::route('/'),
            'create' => CreateCertificationCode::route('/create'),
            'view' => ViewCertificationCode::route('/{record}'),
            'edit' => EditCertificationCode::route('/{record}/edit'),
        ];
    }
}
