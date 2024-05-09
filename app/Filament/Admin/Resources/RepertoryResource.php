<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RepertoryResource\Pages;
use App\Filament\Admin\Resources\RepertoryResource\RelationManagers;
use App\Models\Repertory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\Fieldset;


class RepertoryResource extends Resource
{
    protected static ?string $model = Repertory::class;

    protected static ?string $label = 'Repertório';

    protected static ?string $pluralLabel = 'Repertório';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Música')
                    ->schema([
                        Forms\Components\TextInput::make('repertory_song_name')
                            ->label('Nome da Música')
                            ->required()
                            ->maxLength(1000)
                            ->required()
                            ->columnSpan([
                                'default' => 5,
                            ]),
                        Forms\Components\TextInput::make('repertory_author_name')
                            ->label('Autor da Música')
                            ->required()
                            ->maxLength(1000)
                            ->required()
                            ->columnSpan([
                                'default' => 5,
                            ]),
                        Forms\Components\TextInput::make('repertory_tone')
                            ->label('Tonalidade da Música')
                            ->maxLength(10)
                            ->columnSpan([
                                'default' => 2,
                            ]),
                    ])->columns(12),
                Fieldset::make('Links Úteis')
                    ->schema([
                        Forms\Components\TextInput::make('repertory_link')
                            ->label('Link Youtube')
                            ->required(),
                        Forms\Components\TextInput::make('repertory_lyrics_link')
                            ->label('Link Letra')
                            ->required(),
                        Forms\Components\TextInput::make('repertory_chords_link')
                            ->label('Link Cifra'), 
                    ])->columns(3),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('repertory_song_name')
                    ->label('Nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('repertory_author_name')
                    ->label('Autor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('repertory_tone')
                    ->label('Tonalidade')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([                
                ActionGroup::make([    
                    Tables\Actions\ViewAction::make()
                        ->url(function (Model $record) {
                            return $record->repertory_link;
                        },true)
                        ->label('Musica')
                        ->icon('heroicon-o-musical-note'),
                    Tables\Actions\ViewAction::make()
                        ->url(function (Model $record) {
                            return $record->repertory_lyrics_link;
                        },true)
                        ->label('Letra')
                        ->icon('heroicon-o-bars-3-bottom-left'),
                    Tables\Actions\ViewAction::make()
                        ->url(function (Model $record) {
                            return $record->repertory_chords_link;
                        },true)
                        ->label('Cifra')
                        ->icon('heroicon-o-newspaper'),
                    Tables\Actions\EditAction::make()
                        ->label('Editar')    
                        ->openUrlInNewTab(),
                ])
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
            'index' => Pages\ListRepertories::route('/'),
            'create' => Pages\CreateRepertory::route('/create'),
            'edit' => Pages\EditRepertory::route('/{record}/edit'),
        ];
    }

}
