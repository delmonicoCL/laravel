<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moduls extends Model
{
    use HasFactory;
    
    protected $table = 'moduls';
    protected $primaryKey = 'id';
    // public $incrementing = false; // Nuestro campo no es autoincrement.
    public $timestamps = false;


    public function cursos()
    {
        return $this->belongsToMany(Cursos::class, 'moduls_has_cursos', 'moduls_id', 'cursos_id')->withPivot('curs_academic_id');
    }
}

    

