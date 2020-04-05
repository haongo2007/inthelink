<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->decimal('price', 15, 4);
            $table->float('rate_total')->default(0);
            $table->integer('rate_count')->default(0);
            $table->integer('viewed')->default(0);
            $table->text('description');
            $table->tinyInteger('available_sample')->default(0);
            $table->tinyInteger('sell_influencer')->default(0);
            $table->timestamp('start_time_selling')->nullable();
            $table->timestamp('end_time_selling')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

        });
        Schema::table('products', function(Blueprint $table)
        {
            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('categories_id');

            $table->foreign('creator_id')
                ->references('id')->on('suppliers');

            $table->foreign('categories_id')
                ->references('id')->on('categories');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
    