<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'subjects';
    protected $fillable = [
        'subject_name'
    ];

    public function teacher()
    {
        return $this->hasOne(\App\Models\Teacher::class, 'subject_id', 'id');
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
