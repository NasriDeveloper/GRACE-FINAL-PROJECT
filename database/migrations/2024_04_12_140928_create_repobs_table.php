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
        Schema::create('repobs', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('email')->unique();
            $table->string('Sex')->nullable();
            $table->string('Class')->nullable();
            $table->string('Stream')->nullable();
            
            $subjects = [
                'English', 'Kiswahili', 'CivicsMoral', 'SocialStudies',
                'ScienceTechn', 'Mathematics'
            ];

            foreach ($subjects as $subject) {
                $table->string("{$subject}Score")->nullable();
                $table->string("{$subject}Subject")->nullable();
            }
            $table->string('Sport')->nullable();
            $table->string('Cooperation')->nullable();
            $table->string('Discipline')->nullable();
            $table->string('Cleanliness')->nullable();
            $table->string('Hardworking')->nullable();
            $table->string('PrincipalComment')->nullable();
            $table->text('classteachercomment')->nullable();
            $table->string('ClassTeacher')->nullable();
            $table->string('PhoneNo')->nullable();
            $table->string('PrincipalName')->nullable();
            $table->string('PhoneN')->nullable();
            $table->string('Signature')->nullable();
            $table->string('DateOf')->nullable();
            $table->date('dob')->nullable();
            $table->text('photo')->nullable();
            $table->text('photo1')->nullable();
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repobs');
    }
};
