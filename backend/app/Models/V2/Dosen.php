<?php

namespace App\Models\V2;

use Illuminate\Database\Eloquent\Model;
// use App\Models;
class Dosen extends Model
{
    protected $table = 'dosen_v2';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_dosen', 'updated_at', 'created_at',
    ];

} 