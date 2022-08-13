<?php

namespace App\Models\V2;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'mata_kuliah_v2';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_matakuliah', 'updated_at', 'created_at',
    ];

} 