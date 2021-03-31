<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Staff extends Model
{
    use HasFactory;

    protected $table = 'type_staff';

    protected $fillable = [
        'name',
    ];

    public function staffs()
    {
        return $this->hasMany(Staff::class, 'type_id', 'id');
    }
}
