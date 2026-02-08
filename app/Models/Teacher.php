<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'teachers';
    protected $fillable = [
        'name', 'gender', 'email', 'phone', 'address', 'subject_id', 'user_id'
    ];

    public function subject()
    {
        return $this->belongsTo(\App\Models\Subject::class, 'subject_id');
    }

}
