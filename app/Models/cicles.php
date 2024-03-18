<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class cicles extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    protected $primaryKey = 'id';
    // public $incrementing = false; // Nuestro campo no es autoincrement.
    public $timestamps = false;


    /**
     * Get all of the comments for the cicles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursos()
    {
        return $this->hasMany(Cursos::class, 'cicles_id');
    }
}
