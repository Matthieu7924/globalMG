<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'file_path',
        'playlistname',
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }
}
