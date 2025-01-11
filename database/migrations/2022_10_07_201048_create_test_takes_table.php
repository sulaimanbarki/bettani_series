<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTestTakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_takes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->string('cnic');
            $table->integer('marks')->default(0);
            $table->timestamp('startingtime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('endingtime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('type')->default(1);
            $table->string('district')->nullable();
            $table->integer('result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_takes');
    }
}
