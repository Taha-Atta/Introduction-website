<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table='testimonials';

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
