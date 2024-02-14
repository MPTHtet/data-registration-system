<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegionResource\Pages;
use App\Filament\Resources\RegionResource\RelationManagers;
use App\Models\Region;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
//filament
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
class RegionResource extends Resource
{
    protected static ?string $model = Region::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('region_id'),
                    Select::make('continent')
                        ->options([
                            'Asia' => 'Asia',
                            'Europe' => 'Europe',
                            'Africa' => 'Africa',
                            'North America' => 'North America',
                            'South America' => 'South America',
                            'Australia' => 'Australia',
                            'Antarctica' => 'Antarctica',
                        ])->default('Asia'),
                    Select::make('country')
                    ->options([
                        'Myanmar' => 'Myanmar'
                    ])->default('Myanmar')
                    ->required(),
                    TextInput::make('city')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('continent')
                    ->searchable()->copyable(),
                TextColumn::make('country')
                    ->searchable()->copyable(),
                TextColumn::make('city')
                    ->searchable()->copyable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListRegions::route('/'),
            'create' => Pages\CreateRegion::route('/create'),
            'edit' => Pages\EditRegion::route('/{record}/edit'),
        ];
    }
}
