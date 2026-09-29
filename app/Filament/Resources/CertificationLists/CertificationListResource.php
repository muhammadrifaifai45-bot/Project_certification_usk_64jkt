<?php

namespace App\Filament\Resources\CertificationLists;

use App\Filament\Resources\CertificationLists\Pages\CreateCertificationList;
use App\Filament\Resources\CertificationLists\Pages\EditCertificationList;
use App\Filament\Resources\CertificationLists\Pages\ListCertificationLists;
use App\Filament\Resources\CertificationLists\Pages\ViewCertificationList;
use App\Filament\Resources\CertificationLists\Schemas\CertificationListForm;
use App\Filament\Resources\CertificationLists\Schemas\CertificationListInfolist;
use App\Filament\Resources\CertificationLists\Tables\CertificationListsTable;
use App\Models\CertificationList;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CertificationListResource extends Resource
{
    protected static ?string $model = CertificationList::class;
    protected static ?string $navigationLabel = "Certification Management";

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-clipboard-document-list';


    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return CertificationListForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CertificationListInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CertificationListsTable::configure($table);
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
            'index' => ListCertificationLists::route('/'),
            'create' => CreateCertificationList::route('/create'),
            'view' => ViewCertificationList::route('/{record}'),
            'edit' => EditCertificationList::route('/{record}/edit'),
        ];
    }
}
