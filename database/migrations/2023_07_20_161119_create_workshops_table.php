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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('workshop_name');
            $table->string('workshop_type');
            $table->string('workshop_fee');
            $table->string('workshop_img');
            $table->string('desc');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('workshop_status')->default('true');
            $table->string('member_join');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('workshops');
    }
};
