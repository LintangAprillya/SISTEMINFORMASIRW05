<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\DataKK;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\DataKKResource\Pages;
use App\Filament\Resources\DataKKResource\RelationManagers;

class DataKKResource extends Resource
{
    protected static ?string $model = DataKK::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function label(): string
    {
        return 'Data Kartu Keluarga';
    }

    public static function pluralLabel(): string
    {
        return 'Data Kartu Keluarga';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('id')
                            ->label('ID Kartu Keluarga')
                            ->disabled(),
                        TextInput::make('no_kk')
                            ->label('Nomor Kartu Keluarga')
                            ->unique()
                            ->required(),
                        TextInput::make('nama_kepala_keluarga')
                            ->label('Nama Kepala Keluarga')
                            ->required(),
                        Select::make('rt_rw')
                            ->label('RT / RW')
                            ->options([
                                '01/05' => '01 / 05',
                                '02/05' => '02 / 05',
                                '03/05' => '03 / 05',
                                '04/05' => '04 / 05',
                                '05/05' => '05 / 05',
                                '06/05' => '06 / 05',
                                '07/05' => '07 / 05',
                                '08/05' => '08 / 05',
                                '09/05' => '09 / 05',
                                '10/05' => '10 / 05'
                            ])->required(),
                        TextInput::make('alamat')
                            ->label('Alamat Rumah')
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID Kartu Keluarga')->sortable(),
                TextColumn::make('no_kk')->label('Nomor Kartu Keluarga')->sortable()->searchable(),
                TextColumn::make('nama_kepala_keluarga')->label('Nama Kepala Keluarga')->sortable()->searchable(),
                TextColumn::make('rt_rw')->label('RT / RW')->sortable()->searchable(),
                TextColumn::make('alamat')->label('Alamat Rumah')->sortable()->searchable(),
            ])
            ->filters([
                // Add any filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Add any relation managers if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDataKKS::route('/'),
            'create' => Pages\CreateDataKK::route('/create'),
            'edit' => Pages\EditDataKK::route('/{record}/edit'),
        ];
    }
}
