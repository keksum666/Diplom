<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'age_access_id',
        'poster',
        'rating',
        'duration',
        'country',
        'trailer',
        'views',
    ];

    public function age()
    {
        return $this->belongsTo(Age::class, 'age_access_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_film');
    }

    public function staffs()
    {
        return $this->belongsToMany(Staff::class, 'staffs_films');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genres_films');
    }

    public function status()
    {
        return $this->belongsToMany(Film_Status::class, 'films_status_to_films', 'film_id','id');
    }
}
