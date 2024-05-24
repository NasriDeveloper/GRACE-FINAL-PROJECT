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
        Schema::create('tasts', function (Blueprint $table) {
            $table->id();
            $table->string('s/n')->nullable();
            $table->string('sex')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
           
          
        
            
            $subjects = [
                'eng', 'kisw', 'cm', 'sst',
                'scie', 'math'
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
            $table->string('remarks')->nullable();  
            $table->string('class')->nullable();
         
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasts');
    }
};
