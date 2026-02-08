<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'classes'; 

    protected $fillable = ['class_name', 'capacity'];

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
