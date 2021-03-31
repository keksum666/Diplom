<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'date_of_birth',
        'photo',
        'type_id',
    ];

    public function type_staff()
    {
        return $this->belongsTo(Type_Staff::class, 'type_id', 'id');
    }

    public function films()
    {
        return $this->belongsToMany(Film::class, 'staffs_films');
    }
}
