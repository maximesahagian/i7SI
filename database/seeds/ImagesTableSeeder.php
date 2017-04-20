<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('images')->insert( [
			'id'=>1,
			'libelle'=>'Image bannière',
			'link'=>'58f8a89087538.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>2,
			'libelle'=>'Image Notre Histoire',
			'link'=>'history_background.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>3,
			'libelle'=>'Image Slider 1',
			'link'=>'slider_1.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>4,
			'libelle'=>'Image Slider 2',
			'link'=>'slider_1.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>5,
			'libelle'=>'Image Slider 3',
			'link'=>'slider_1.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>6,
			'libelle'=>'Image n°1 Chiffres Clés',
			'link'=>'actu_right_arrow.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>7,
			'libelle'=>'Image n°2 Chiffres Clés',
			'link'=>'gray_gradiant_block.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );

		DB::table('images')->insert( [
			'id'=>8,
			'libelle'=>'Image n°3 Chiffres Clés',
			'link'=>'classroom_block.jpg',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );
    }
}
