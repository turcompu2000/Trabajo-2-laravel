<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destails extends Model
{
    use HasFactory;
    protected $table = '_details';
    protected $primaryKey = 'id';
    public $timestamps = false ;
}
