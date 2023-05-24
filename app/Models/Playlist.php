<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'genre', // Ajoutez la propriété "genre" au tableau $fillable
    ];

    public function songs()
{
    return $this->hasMany(Song::class);
}

}
