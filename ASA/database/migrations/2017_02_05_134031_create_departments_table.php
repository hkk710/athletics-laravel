<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('department');
            $table->integer('score');
            $table->timestamps();
        });
        DB::table('departments')->insert(
            ['score' => 0]
        );
        DB::table('departments')->insert(
            ['score' => 0]
        );
        DB::table('departments')->insert(
            ['score' => 0]
        );
        DB::table('departments')->insert(
            ['score' => 0]
        );
        DB::table('departments')->insert(
            ['score' => 0]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
