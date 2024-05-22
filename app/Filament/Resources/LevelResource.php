<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Level;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use function Laravel\Prompts\select;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LevelResource\Pages;

use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LevelResource\RelationManagers;

class LevelResource extends Resource
{
    protected static ?string $model = Level::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('level_id')->options([
                            '1'=>'1 (Ketua RW)',
                            '2'=>'2 (Sekretaris RW)',
                            '3'=>'3 (Bendahara RW)',
                            '4'=>'4 (Warga)'
                        ]),
                        TextInput::make('nama')->required(),
                        Select::make('nama_level')->options([
                            'Ketua RW'=>'Ketua RW',
                            'Sekretaris RW'=>'Sekretaris RW',
                            'Bendahara RW'=>'Bendahara RW',
                            'Warga'=>'Warga'
                        ])
                        ]),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('level_id')->sortable()->searchable(),
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('nama_level')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListLevels::route('/'),
            'create' => Pages\CreateLevel::route('/create'),
            'edit' => Pages\EditLevel::route('/{record}/edit'),
        ];
    }    
}
