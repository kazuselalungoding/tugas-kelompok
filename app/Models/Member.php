<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    /**
     * fillable
     * 
     * @var array
     */

    protected $fillable = [
        'image',
        'name',
        'nip',
        'kelas',
    ];
}
