<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->delete();
		$cat = array(
		  array('id' => '1','name' => 'Vêtements','titre' =>'Vêtements, Textiles et Accessoires de mode'),
		  array('id' => '2','name' => 'Textiles et produit de cuir','titre' =>'Vêtements, Textiles et Accessoires de mode'),
		  array('id' => '3','name' => 'Accessoire de mode','titre' =>'Vêtements, Textiles et Accessoires de mode'),
		  array('id' => '4','name' => 'Horlogerie, bijouterie et optiqu','titre' =>'Vêtements, Textiles et Accessoires de mode'),
		  array('id' => '5','name' => 'Alimentation','titre' =>'Alimentation et Agriculture'),
		  array('id' => '6','name' => 'Elevage et Animaux','titre' =>'Alimentation et Agriculture'),
		  array('id' => '8','name' => 'Télécommunication','titre' =>'Telecommunication et Equipement electrique'),
		  array('id' => '9','name' => 'Matériel e électrique','titre' =>'Telecommunication et Equipement electrique'),
		  array('id' => '10','name' => 'Composant électrique','titre' =>'Telecommunication et Equipement electrique'),
		  array('id' => '11','name' => 'Moteur','titre' =>'Telecommunication et Equipement electrique'),
		  array('id' => '12','name' => 'Beauté','titre' =>'Beauté et santé'),
		  array('id' => '13','name' => 'Sante et médecine','titre' =>'Beauté et santé'),
		  array('id' => '14','name' => 'Chaussures et Accessoire','titre' =>'Sacs, chaussures et Accessoire'),
		  array('id' => '15','name' => 'Valise et Sacs','titre' =>'Sacs, chaussures et Accessoire'),
		  array('id' => '16','name' => 'Auto et Transport','titre' =>'Auto et Transport'),
		  array('id' => '17','name' => 'Décoration et Artisanat','titre' =>'Sport, Décoration et jouet'),
		  array('id' => '18','name' => 'Sport et Loisir','titre' =>'Sport, Décoration et jouet'),
		  array('id' => '19','name' => 'Jeux et jouets','titre' =>'Sport, Décoration et jouet'),
		  array('id' => '20','name' => 'Maison et Jardin','titre' =>'Maison, Lumières et construction'),
		  array('id' => '21','name' => 'bâtiment et construction','titre' =>'Maison, Lumières et construction'),
		  array('id' => '22','name' => 'Informatique','titre' =>'Electronique et Electroménager'),
		  array('id' => '23','name' => 'Electroménager','titre' =>'Electronique et Electroménager'),
		  array('id' => '24','name' => 'Sécurité et protection','titre' =>'Electronique et Electroménager'),
		  array('id' => '25','name' =>   'Appareil photos, Accessoire et son','titre' =>'Electronique et Electroménager'),
		  array('id' => '26','name' => 'Bureaux et Fourniture scolaire','titre' =>'Publicite, Emballage et Bureaux'),
		  array('id' => '27','name' => 'Equipement de service','titre' =>'Publicite, Emballage et Bureaux'),
		  array('id' => '28','name' => 'Conditionnement et stockage','titre' =>'Publicite, Emballage et Bureaux'),
		  array('id' => '29','name' => 'Plastique et caoutchouc','titre' =>'Plastique et caoutchouc'),
		  array('id' => '30','name' => 'Machine et Outils','titre' =>'Machine et Outils'),
		  array('id' => '31','name' => 'خدماتك','titre' =>'خدماتك'),
		  array('id' => '32','name' => 'Autres','titre' =>'خدماتك'),

		  );
		DB::table('categories')->insert($cat);
    }
		  


        
    }

