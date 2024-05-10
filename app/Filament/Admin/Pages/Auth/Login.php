<?php

namespace App\Filament\Admin\Pages\Auth;

use Filament\Forms\Form;
use Illuminate\Contracts\Support\Htmlable;
use Filament\Pages\Auth\Login as AuthLogin;
use Filament\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class Login extends AuthLogin
{

    public function form(Form $form):Form
    {
        return $form->schema([
                        $this->getEmailFormComponent()->label('Email'),
                        $this->getPasswordFormComponent()->label('Senha'),
                        $this->getRememberFormComponent()->label('Lembrar de mim'),
                        
                    ])->statePath('data');
    }

    public function registerAction(): Action
    {
        return Action::make('register')
            ->link()
            ->label('Clique aqui para criar uma conta')
            ->url(filament()->getRegistrationUrl());
    }

    public function getTitle(): string | Htmlable
    {
        return '';
    }

    public function getHeading(): string | Htmlable
    {
        return 'Entrar';
    }

    protected function getAuthenticateFormAction(): Action
    {
        return Action::make('authenticate')
            ->label('Entrar')
            ->submit('authenticate');
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('filament-panels::pages/auth/login.form.password.label'))
            ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()"> {{ __(\'Esqueceu a senha?\') }}</x-filament::link>')) : null)
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->autocomplete('current-password')
            ->required()
            ->extraInputAttributes(['tabindex' => 2]);
    }
    
}
