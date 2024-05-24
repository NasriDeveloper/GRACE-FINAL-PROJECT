<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tast extends Model
{
    use HasFactory;
    protected $fillable = [
        's/n',
        'sex',
        'name',
        'email',
        'class',
        'engscore',
        'enggrd',
        'engpos',
        'engre',
        'kiswscore',
        'kiswgrd',
        'kiswpos',
        'kiswre',
        'cmscore',
        'cmgrd',
        'cmpos',
        'cmre',
        'sstscore',
        'sstgrd',
        'sstpos',
        'sstre',
        'sciescore',
        'sciegrd',
        'sciepos',
        'sciere',
        'mathscore',
        'mathgrd',
        'mathpos',
        'mathre',
        'total',
        'average',
        'position',
        'grade',
        'stream', 
        'remarks',    
     
      


    ];
}



