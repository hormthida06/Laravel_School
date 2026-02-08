<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'students';

    protected $fillable = [
        'name',
        'email',
        'gender',
        'dob',
        'phone',
        'address',
        'photo',
        'class_id',
    ];

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}