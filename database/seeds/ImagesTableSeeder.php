<?php

use Illuminate\Database\Seeder;
use App\Property_image;

class Property_imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property_image::create(array(
            'file_path' => '1.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '2.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '3.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '4.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '5.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '6.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '7.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '8.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '9.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '10.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '11.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '12.jpg',
            'category' => 'property2',
         ));

        Property_image::create(array(
            'file_path' => '13.jpg',
            'category' => 'property2',
         ));
    }
}

