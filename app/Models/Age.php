<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
    ];

    protected $table = 'age_access';

    public function films()
    {
        return $this->hasMany(Film::class, 'age_access_id');
    }
}
