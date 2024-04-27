<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasfo extends Model
{
    use HasFactory;
    protected $table = 'clasfos';
    protected $fillable = [
        'S/N',
        'NAME',
        'SEX',
        'ClASS',
        'STREAM',
        'ENGSCORE',
        'ENGGRD',
        'ENGPOS',
        'ENGRE',
        'KISWSCORE',
        'KISWGRD',
        'KISWPOS',
        'KISWRE',
        'CMSCORE',
        'CMGRD',
        'CMPOS',
        'CMRE',
        'SSTSCORE',
        'SSTGRD',
        'SSTPOS',
        'SSTRE',
        'SCIESCORE',
        'SCIEGRD',
        'SCIEPOS',
        'SCIERE',
        'MATHSCORE',
        'MATHGRD',
        'MATHPOS',
        'MATHRE',
        'TOTAL',
        'AVERAGE',
        'GRADE',
        'REMARKS',
        'POSITION',
        'sports',
        'Cooperation',
        'Discipline',
        'Cleanliness',
        
    ];
}
