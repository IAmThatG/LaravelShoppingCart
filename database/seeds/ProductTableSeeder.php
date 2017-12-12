<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagepath' => 'Superman Unchained (2013-) - Director_s Cut 001-000.jpg',
            'title' => 'Superman Unchained #52',
            'description' => 'This is a super cool comic written by Scott Snyder with Jim Lee as the artist.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagepath' => 'IMG_0055.JPG',
            'title' => 'The drunk bird',
            'description' => 'This is story written by Gabriel Lee.',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagepath' => '12743933_10153948117107855_7796721919209312630_n.jpg',
            'title' => 'Space Supreme',
            'description' => 'This is a super cool comic about space adventures, written by Scott Snyder with Jim Lee as the artist.',
            'price' => 30
        ]);
        $product->save();

        $product = new \App\Product([
            'imagepath' => '11194539_10153295591267855_7927150105339942742_o.jpg',
            'title' => 'Green Arrow Reloaded',
            'description' => 'This is a super cool comic of a legend named green arrow, written by Scott Snyder with Jim Lee as the artist.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagepath' => 'Captain America 001.jpg',
            'title' => 'Winter Soldier',
            'description' => 'This is a super cool comic of the star spangled soldier, written by Scott Snyder with Jim Lee as the artist.',
            'price' => 40
        ]);
        $product->save();
    }
}
