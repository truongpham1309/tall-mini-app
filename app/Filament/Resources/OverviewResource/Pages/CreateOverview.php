<?php

namespace App\Filament\Resources\OverviewResource\Pages;

use App\Filament\Resources\OverviewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOverview extends CreateRecord
{
    protected static string $resource = OverviewResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
