<?php

namespace App\Models\V2;

use Illuminate\Database\Eloquent\Model;

class DosenMatakuliah extends Model
{
    protected $table = 'dosen_mata_kuliah_v2';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_mata_kuliah', 'id_dosen', 'updated_at', 'created_at',
    ];

} 