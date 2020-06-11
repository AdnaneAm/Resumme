<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->string('employer')->nullable();
            $table->string('job_title');
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('start_date');
            $table->string('end_date');
            $table->text('job_description')->nullable();

            $table->timestamps();
        });
        Schema::table('experience',function(Blueprint $table){
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience');
    }
}
