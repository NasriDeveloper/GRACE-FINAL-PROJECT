<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Sex',
        'Class',
        'Stream',
        'EnglishScore',
        'EnglishGrade',
        'EnglishRank',
        'EnglishOut',
        'EnglishRemark',
        'EnglishSubject',
        'KiswahiliScore',
        'KiswahiliGrade',
        'KiswahiliRank',
        'KiswahiliOut',
        'KiswahiliRemark',
        'KiswahiliSubject',
        'CivicsMoralScore',
        'CivicsMoralGrade',
        'CivicsMoralRank',
        'CivicsMoralOut',
        'CivicsMoralRemark',
        'CivicsMoralSubject',
        'SocialStudiesScore',
        'SocialStudiesGrade',
        'SocialStudiesRank',
        'SocialStudiesOut',
        'SocialStudiesRemark',
        'SocialStudiesSubject',
        'ScienceTechnScore',
        'ScienceTechnGrade',
        'ScienceTechnRank',
        'ScienceTechnOut',
        'ScienceTechnRemark',
        'ScienceTechnSubject',
        'MathematicsScore',
        'MathematicsGrade',
        'MathematicsRank',
        'MathematicsOut',
        'MathematicsRemark',
        'MathematicsSubject',
        'TotalMarks',
        'Average',
        'Grade',
        'Remark',
        'Position',
        'Out_of',
        'Sport',
        'Cooperation',
        'Discipline',
        'Cleanliness',
        'Hardworking',
        'PrincipalComment',
        'ClassTeacher',
        'PhoneNo',
        'PrincipalName',
        'PhoneN',
        'Signature',
        'DateOf', 
    ];
}