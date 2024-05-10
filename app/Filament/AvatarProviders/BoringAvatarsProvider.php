<?php
 
namespace App\Filament\AvatarProviders;
 
use Filament\Facades\Filament;
use Filament\AvatarProviders\Contracts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Auth\Authenticatable;
 
class BoringAvatarsProvider implements Contracts\AvatarProvider
{
    public function get(Model | Authenticatable $record): string
    {

        if ($record->photo && Storage::url($record->photo)) {
            return Storage::url($record->photo);
        }

        $name = str(Filament::getNameForDefaultAvatar($record))
            ->trim()
            ->explode(' ')
            ->map(fn (string $segment): string => filled($segment) ? mb_substr($segment, 0, 1) : '')
            ->join(' ');
 
        return 'https://source.boringavatars.com/beam/120/' . urlencode($name);
    }
}