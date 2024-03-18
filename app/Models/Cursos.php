<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;


    protected $table = 'cursos';
    protected $primaryKey = 'id';
    // public $incrementing = false; // Nuestro campo no es autoincrement.
    public $timestamps = false;

    /**
     * Get the user that owns the Cursos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cicles()
    {
        return $this->belongsTo(cicles::class, 'cicles_id');
    }
    
    /**
     * The roles that belong to the Cursos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function moduls()
    {
        return $this->belongsToMany(Moduls::class, 'moduls_has_cursos', 'cursos_id', 'moduls_id')->withPivot('curs_academic_id');
    }
}
