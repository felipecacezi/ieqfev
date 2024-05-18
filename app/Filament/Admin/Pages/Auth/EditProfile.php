<?php

namespace App\Filament\Admin\Pages\Auth;

use App\Models\Position;
use Closure;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;


class EditProfile extends BaseEditProfile
{    

    protected string | Closure | null $diskName = 'dropbox';
    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
            FileUpload::make('photo')
                ->label('Foto'),
            Select::make('position_id')
                ->label('Função')
                ->options(Position::all()->pluck('position_name', 'id'))
                ->searchable()
        ]);
    }
}
