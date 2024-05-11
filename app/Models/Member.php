<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    public function getRouteKey()
    {
        return 'slug';
    }

    protected $table='members';

    // protected $perimartkey ='id';

    // protected $KeyType ='integer';

    // public $incrementing = true;

    protected $guarded  = ['id'];

     protected $casts = [
     // 'status'=> status:class,

    ];

    const UPLOADPATH = 'images/';
    const UPLOADFIELDS = [];

    #----------------------------Realtionshps

    #-------------------------------Attrebutis

    #--------------------------------Customfunction

    #--------------------------------Scope

    #--------------------------------Accessors & Mutators


}
