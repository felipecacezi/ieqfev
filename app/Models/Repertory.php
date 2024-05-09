<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repertory extends Model
{
    use HasFactory;

    protected $fillable = [
        'repertory_song_name',
        'repertory_author_name',
        'repertory_link',
        'repertory_lyrics_link',
        'repertory_chords_link',
        'repertory_tone'
    ];
}
