<?php

namespace App\Filament\Resources\DataKKResource\Pages;

use App\Filament\Resources\DataKKResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataKK extends EditRecord
{
    protected static string $resource = DataKKResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
