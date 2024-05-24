<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasfi extends Model
{
    use HasFactory;
    protected $fillable = [
        's/n',
        'sex',
        'name',
        'email',
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
        'v/skillsscore',
        'v/skillsgrd',
        'v/skillspos',
        'v/skillsre',
        'total',
        'average',
        'position',
        'grade',
        'stream', 
        'sports',
        'cooperation',
        'discipline',
        'cleanliness',
        'hardworking',
        'remarks',    
        'clasteachcoment',
        'clasteachname',
        'clasteachphone',
        'principalcoment',
        'principalname',
        'principalphone',
        'class',
        'engte',
        'kiswte',
        'cmete',
        'sstte',
        'sciete',
        'mathte',
      


    ];
}



