<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('bookable_id')->index();
            $table->unsignedBigInteger('booking_id')->index()->nullable();
            $table->unsignedTinyInteger('rating');
            $table->text('content');
            $table->timestamps();

            $table->foreign('bookable_id')->on('bookables')->references('id');
            $table->foreign('booking_id')->on('bookables')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
