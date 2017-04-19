<?php

use IlluminateDatabaseSeeder;

class TextsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('texts')->insert( [
			'id'=>1,
			'libelle'=>'Titre bannière',
			'text'=>'Accompagner nos client et leur offrir un travail de qualité',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>2,
			'libelle'=>'Paragraphe Bannière',
			'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>3,
			'libelle'=>'CTA Bannière',
			'text'=>'DÉCOUVRIR',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>4,
			'libelle'=>'Titre Qui Sommes Nous ?',
			'text'=>'LE GROUPE U&D',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>5,
			'libelle'=>'Titre Bloc blanc "Notre histoire"',
			'text'=>'Notre histoire',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>6,
			'libelle'=>'Paragraphe du block blanc "Notre histoire"',
			'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>7,
			'libelle'=>'CTA du block blanc "Notre histoire"',
			'text'=>'EN SAVOIR PLUS',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>8,
			'libelle'=>'Titre du block "Notre savoir faire"',
			'text'=>'Notre savoir faire',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>9,
			'libelle'=>'Slide 1 "Notre savoir faire"',
			'text'=>'Sed ut SLIDE1 perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia ',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>10,
			'libelle'=>'Slide 2 "Notre savoir faire"',
			'text'=>'Sed ut SLIDE2 perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia ',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>11,
			'libelle'=>'Slide 3 "Notre savoir faire"',
			'text'=>'Sed ut SLIDE3 perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia ',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>12,
			'libelle'=>'Titre "Chiffres Clés"',
			'text'=>'CHIFFRES CLÉS',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>13,
			'libelle'=>'Info du 1er block chiffres clés',
			'text'=>'LOREMP INFORMATIONS / 18.04',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>14,
			'libelle'=>'Titre du 1er block chiffres clés',
			'text'=>'Lorem Ipsum title',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>15,
			'libelle'=>'Paragraphe du 1er block chiffres clés',
			'text'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qu',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>16,
			'libelle'=>'Info du 2ème block chiffres clés',
			'text'=>'LOREMP INFORMATIONS / 18.04',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>17,
			'libelle'=>'Titre du 2ème block chiffres clés',
			'text'=>'Lorem Ipsum title',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>18,
			'libelle'=>'Paragraphe du 2ème block chiffres clés',
			'text'=>'2 700 000 €',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>19,
			'libelle'=>'Info du 3ème block chiffres clés',
			'text'=>'LOREMP INFORMATIONS / 18.04',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>20,
			'libelle'=>'Titre du 3ème block chiffres clés',
			'text'=>'Lorem Ipsum title',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>21,
			'libelle'=>'Paragraphe du 3ème block chiffres clés',
			'text'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore totam rem aperiam, atus error sit voluptatem accusantium doloremque laudantium, totam',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>22,
			'libelle'=>'Info du 4ème block chiffres clés',
			'text'=>'LOREMP INFORMATIONS / 18.04',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>23,
			'libelle'=>'Titre du 4ème block chiffres clés',
			'text'=>'Lorem Ipsum title',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>24,
			'libelle'=>'Paragraphe du 4ème block chiffres clés',
			'text'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore totam rem aperiam, atus error sit voluptatem accusantium doloremque laudantium, totam',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>25,
			'libelle'=>'Info du 5ème block chiffres clés',
			'text'=>'LOREMP INFORMATIONS / 18.04',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>26,
			'libelle'=>'Titre du 5ème block chiffres clés',
			'text'=>'Lorem Ipsum title',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>27,
			'libelle'=>'Paragraphe du 5ème block chiffres clés',
			'text'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore totam rem aperiam, atus error sit voluptatem accusantium doloremque laudantium, totam',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>28,
			'libelle'=>'Titre "Nos Partenaires"',
			'text'=>'NOS PARTENAIRES',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>29,
			'libelle'=>'Titre "Contact"',
			'text'=>'UNE QUESTION, UN PROJET ?',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );



		DB::table('texts')->insert( [
			'id'=>30,
			'libelle'=>'CTA "Contact"',
			'text'=>'ENVOYER',
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s')
		] );
    }
}
