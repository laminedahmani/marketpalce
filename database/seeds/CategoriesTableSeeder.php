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
		  array('id' => '1','name' => 'Vêtements'),
		  array('id' => '2','name' => 'Textiles et produit de cuir'),
		  array('id' => '3','name' => 'Accessoire de mode'),
		  array('id' => '4','name' => 'Horlogerie, bijouterie et optiqu'),
		  array('id' => '5','name' => 'Alimentation et Agriculture'),
		  array('id' => '6','name' => 'Elevage et Animaux'),
		  array('id' => '7','name' => 'elecommunication et Equipement electrique'),
		  array('id' => '8','name' => 'Télécommunication'),
		  array('id' => '9','name' => 'Matériel e électrique'),
		  array('id' => '10','name' => 'Composant électrique'),
		  array('id' => '11','name' => 'Moteur'),
		  array('id' => '12','name' => 'Beauté'),
		  array('id' => '13','name' => 'Sante et médecine'),
		  array('id' => '14','name' => 'Chaussures et Accessoire'),
		  array('id' => '15','name' => 'Valise et Sacs'),
		  array('id' => '16','name' => 'Auto et Transport'),
		  array('id' => '17','name' => 'Décoration et Artisanat'),
		  array('id' => '18','name' => 'Sport et Loisir'),
		  array('id' => '19','name' => 'Jeux et jouets'),
		  array('id' => '20','name' => 'Maison et Jardin'),
		  array('id' => '21','name' => 'bâtiment et construction'),
		  array('id' => '22','name' => 'Informatique'),
		  array('id' => '23','name' => 'Electroménager'),
		  array('id' => '24','name' => 'Sécurité et protection'),
		  array('id' => '25','name' => 'Bureaux et Fourniture scolaire'),
		  array('id' => '26','name' => 'Equipement de service'),
		  array('id' => '27','name' => 'Conditionnement et stockage'),
		  array('id' => '28','name' => 'Plastique et caoutchouc'),
		  array('id' => '29','name' => 'Machine et Outils'),
		  array('id' => '30','name' => 'خدماتك'),
		  array('id' => '31','name' => 'Autres'),

		  );
		DB::table('categories')->insert($cat);
    }
		  


        
    }

