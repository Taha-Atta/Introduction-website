<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // protected $table='';

    // protected $perimartkey ='id';

    // protected $KeyType ='integer';

    // public $incrementing = true;

    protected $guarded  = ['id'];

     protected $casts = [
     // 'status'=> status:class,

    ];

    // const UPLOADPATH = 'images/';
    // const UPLOADFIELDS = [];

    #----------------------------Realtionshps

    #-------------------------------Attrebutis

    #--------------------------------Customfunction

    #--------------------------------Scope

    #--------------------------------Accessors & Mutators


}
