<?php

namespace App\Filament\Admin\Pages\Auth;

use Closure;
use Throwable;
use App\Models\Position;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Support\Facades\FilamentView;
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
