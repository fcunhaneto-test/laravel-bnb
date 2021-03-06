<?php

use Illuminate\Database\Seeder;
use App\Review;
use App\Bookable;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookable::all()->each(function (Bookable $bookable) {
            $reviews = factory(Review::class, random_int(5, 15))->make();

            $bookable->reviews()->saveMany($reviews);
        });

    }
}
