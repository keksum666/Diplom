<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film_Status extends Model
{
    use HasFactory;

    protected $table = 'film_status';

    protected $fillable = [
        'status',
    ];

    public function films()
    {
        return $this->belongsToMany(Film::class, 'films_status_to_films', 'status_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'films_status_to_films', 'user_id');
    }
}
