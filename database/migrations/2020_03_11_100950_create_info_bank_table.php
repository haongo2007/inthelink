<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_bank', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bank_name',55);
            $table->text('bank_number');
            $table->timestamps();
            
            $table->integer('f_id')->default(0);
            $table->integer('s_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_bank');
    }
}
