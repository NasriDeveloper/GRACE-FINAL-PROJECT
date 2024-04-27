<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void          
    {                                  
        Schema::create('clasfos', function (Blueprint $table) {
            $table->id();
            $table->string('S/N')->nullable();
            $table->string('NAME')->nullable();
            $table->string('email')->unique();
            $table->string('SEX')->nullable();
            $table->string('CLASS')->nullable();
            $table->string('STREAM')->nullable();
            
            $subjects = [
                'ENG', 'KISW', 'CM', 'SST',
                'SCIE', 'MATH'
            ];

            foreach ($subjects as $subject) {
                $table->string("{$subject}SCORE")->nullable();
                $table->string("{$subject}GRD")->nullable();
                $table->string("{$subject}POS")->nullable();
                $table->string("{$subject}RE")->nullable();
            }
            $table->string('TOTAL')->nullable();
            $table->string('AVERAGE')->nullable();
            $table->string('POSITION')->nullable();
            $table->string('GRADE')->nullable();
            $table->string('REMARKS')->nullable();
            $table->string('sports')->nullable();
            $table->string('Cooperation')->nullable();
            $table->string('Discipline')->nullable();
            $table->string('Cleanliness')->nullable();
            $table->string('Hardworking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clasfos');
    }
};
