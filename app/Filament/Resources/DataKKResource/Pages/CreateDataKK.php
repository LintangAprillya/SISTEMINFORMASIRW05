<?php

namespace App\Filament\Resources\DataKKResource\Pages;

use App\Filament\Resources\DataKKResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDataKK extends CreateRecord
{
    protected static string $resource = DataKKResource::class;
    protected function getTitle(): string
    {
        return 'Tambah Data Kartu Keluarga';
    }
}
