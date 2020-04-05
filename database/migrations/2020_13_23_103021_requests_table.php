<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('message');
            $table->text('type');
            $table->tinyInteger('status')->default(0);

            $table->unsignedBigInteger('f_id');
            $table->foreign('f_id')
                ->references('id')->on('influencers')->onDelete('cascade');


            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')
                ->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('s_id');
            $table->foreign('s_id')
                ->references('id')->on('suppliers')->onDelete('cascade');

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
        Schema::dropIfExists('requests');
    }
}
