<?php

namespace App\Filament\Resources\CertificationLists\Pages;

use App\Filament\Resources\CertificationLists\CertificationListResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerAction;

class ViewCertificationList extends ViewRecord
{
    protected static string $resource = CertificationListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    public function getTitle(): string|Htmlable
    {
        
        return $this->record->daftar_sertifikasi;
    }

    public function getBreadcrumb(): string
    {
        return $this->record->code;
    }

}
