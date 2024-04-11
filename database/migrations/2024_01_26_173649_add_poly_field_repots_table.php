<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repots', function (Blueprint $table) {
            $table->text('photo')->nullable(); // corrected column name
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repots', function (Blueprint $table) {
            $table->dropColumn('photo'); // corrected column name
        });
    }
};
