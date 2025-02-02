<?php

namespace TomatoPHP\FilamentUsers\Resources\UserResource\Pages;

use Filament\Resources\Pages\ViewRecord;
use TomatoPHP\FilamentUsers\Resources\UserResource;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return UserResource\Actions\ViewPageActions::make($this->getRecord());
    }
}
