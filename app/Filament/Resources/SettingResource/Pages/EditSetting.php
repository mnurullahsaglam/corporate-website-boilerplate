<?php

namespace App\Filament\Resources\SettingResource\Pages;

use App\Filament\Resources\SettingResource;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Contracts\Support\Htmlable;

class EditSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    public function getHeading(): Htmlable|string
    {
        return $this->getRecord()->title.' Ayarını Düzenle';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
