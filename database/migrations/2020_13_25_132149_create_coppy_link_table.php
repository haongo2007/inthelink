<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoppyLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coppy_link', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('link');

            $table->unsignedBigInteger('f_id');
            $table->foreign('f_id')
                ->references('id')->on('influencers')->onDelete('cascade');

            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')
                ->references('id')->on('products')->onDelete('cascade');

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
        Schema::dropIfExists('coppy_link');
    }
}
