<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',50)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->text('access_token')->nullable();
            $table->text('provider_id')->nullable();
            $table->text('provider')->nullable();
            $table->tinyInteger('change_password')->default(0);
            $table->timestamps();
        });

        Schema::table('influencers', function(Blueprint $table)
        {
            $table->unsignedBigInteger('info_id');

            $table->foreign('info_id')
                ->references('id')->on('info_user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('influencers');
    }
}
