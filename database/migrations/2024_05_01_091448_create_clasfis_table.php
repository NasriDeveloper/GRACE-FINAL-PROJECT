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
        Schema::create('clasfis', function (Blueprint $table) {
            $table->id();
            $table->string('s/n')->nullable();
            $table->string('sex')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
          
        
            
            $subjects = [
                'eng', 'kisw', 'cm', 'sst',
                'scie', 'math', 'v/skills'
            ];

            foreach ($subjects as $subject) {
                $table->string("{$subject}score")->nullable();
                $table->string("{$subject}grd")->nullable();
                $table->string("{$subject}pos")->nullable();
                $table->string("{$subject}re")->nullable();
            }
            $table->string('total')->nullable();
            $table->string('average')->nullable();
            $table->string('position')->nullable();
            $table->string('grade')->nullable();
            $table->string('stream')->nullable();        
            $table->string('sports')->nullable();
            $table->string('cooperation')->nullable();
            $table->string('discipline')->nullable();
            $table->string('cleanliness')->nullable();
            $table->string('hardworking')->nullable();
            $table->string('remarks')->nullable();  
            $table->string('clasteachcoment')->nullable();
            $table->string('clasteachname')->nullable();
            $table->string('clasteachphone')->nullable();
            $table->string('principalcoment')->nullable();
            $table->string('principalname')->nullable();
            $table->string('principalphone')->nullable();
            $table->string('class')->nullable();
            $table->string('engte')->nullable();
            $table->string('kiswte')->nullable();
            $table->string('cmete')->nullable();
            $table->string('sstte')->nullable();
            $table->string('sciete')->nullable();
            $table->string('mathte')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clasfis');
    }
};
