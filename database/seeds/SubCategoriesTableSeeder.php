<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->delete();
        $subcat = array(
		array('id'=>'1','name'=>'Femmes vêtements','categorie_id'=>'1'),
        array('id'=>'2','name'=>'hommes vêtements','categorie_id'=>'1'),
        array('id'=>'3','name'=>'Vêtement bébé et enfants','categorie_id'=>'1'),
        array('id'=>'4','name'=>'Vêtement garçons et filles','categorie_id'=>'1'),
        array('id'=>'5','name'=>'Vêtements maternités','categorie_id'=>'1'),
        array('id'=>'6','name'=>'Sous vêtement homme et femme','categorie_id'=>'1'),
        array('id'=>'7','name'=>'Robe marie et Accessoire','categorie_id'=>'1'),
        array('id'=>'8','name'=>'Vêtement de sport','categorie_id'=>'1'),
        array('id'=>'9','name'=>'Service de signe de mode','categorie_id'=>'1'),
        array('id'=>'10','name'=>'Matériel de culture','categorie_id'=>'1'),
        array('id'=>'11','name'=>'Uniforme','categorie_id'=>'1'),
        array('id'=>'12','name'=>'ملابس تقليدية','categorie_id'=>'1'),

        array('id'=>'13','name'=>'Tissus, Fils','categorie_id'=>'2'),
        array('id'=>'14','name'=>'Cuir','categorie_id'=>'2'),

        array('id'=>'15','name'=>'Chapeaux et casquette, châles','categorie_id'=>'3'),
        array('id'=>'16','name'=>'Ceinture, cravate, gant et Echarpe','categorie_id'=>'3'),

        array('id'=>'17','name'=>'Montre, Lunette','categorie_id'=>'4'),
        array('id'=>'18','name'=>'Bijoux, bijoux kabyle','categorie_id'=>'4'),

        array('id'=>'19','name'=>'Aliment pour bébé et céréale','categorie_id'=>'5'),
        array('id'=>'20','name'=>'Café, Boisson','categorie_id'=>'5'),
        array('id'=>'21','name'=>'Conserve, Pate','categorie_id'=>'5'),
        array('id'=>'22','name'=>'Farine, Huile','categorie_id'=>'5'),
        array('id'=>'23','name'=>'Légume, Fruit','categorie_id'=>'5'),
        array('id'=>'24','name'=>'Viande, Poisson','categorie_id'=>'5'),
        array('id'=>'25','name'=>'boulangerie et pâtisserie, chocolat et sucrerie','categorie_id'=>'5'),

        array('id'=>'26','name'=>'Téléphone mobile','categorie_id'=>'8'),
        array('id'=>'27','name'=>'Pièce et Accessoire','categorie_id'=>'8'),

        array('id'=>'28','name'=>'Distribution électrique, Caisse électrique','categorie_id'=>'9'),
        array('id'=>'29','name'=>'Accessoire de câblage et câble','categorie_id'=>'9'),
        array('id'=>'30','name'=>'Disjoncteur générateur, Prise, Fusible','categorie_id'=>'9'),
        array('id'=>'31','name'=>'Batterie et Transformation, Sources','categorie_id'=>'9'),

        array('id'=>'32','name'=>'Maquillage','categorie_id'=>'12'),
        array('id'=>'33','name'=>'Parfume et Déodorant','categorie_id'=>'12'),
        array('id'=>'34','name'=>'Hygiène','categorie_id'=>'12'),
        array('id'=>'35','name'=>'Soins de la peau et cheveux','categorie_id'=>'12'),
        array('id'=>'36','name'=>'Produit pour bébé','categorie_id'=>'12'),
        array('id'=>'37','name'=>'Rasage et épilation','categorie_id'=>'12'),
        array('id'=>'38','name'=>'Equipement de beauté','categorie_id'=>'12'),
        array('id'=>'39','name'=>'Equipement de salon de coiffure et Matériel','categorie_id'=>'12'),

        array('id'=>'40','name'=>'اعشاب طبية','categorie_id'=>'13'),
        array('id'=>'41','name'=>'Logiciel médicaux','categorie_id'=>'13'),
        array('id'=>'42','name'=>'Equipment médicaux','categorie_id'=>'13'),
        array('id'=>'43','name'=>'Approvisionnement des analyses et Appareillage','categorie_id'=>'13'),
        array('id'=>'44','name'=>'Lunette médicale','categorie_id'=>'13'),

        array('id'=>'45','name'=>'Chaussures pour femmes','categorie_id'=>'14'),
        array('id'=>'46','name'=>'Chaussures pour hommes','categorie_id'=>'14'),
        array('id'=>'47','name'=>'Chaussures pour bébé et enfants','categorie_id'=>'14'),
        array('id'=>'48','name'=>'Chaussures de sport','categorie_id'=>'14'),

        array('id'=>'49','name'=>'Sacs a main et Bandoulier, Portefeuilles et pochette','categorie_id'=>''),
        array('id'=>'50','name'=>'Sacs a dos, Sacs de sport et loisir','categorie_id'=>'15'),
        array('id'=>'51','name'=>'Valise, Sacs de voyage','categorie_id'=>'15'),

        array('id'=>'52','name'=>'Voiture','categorie_id'=>'16'),
        array('id'=>'53','name'=>'Camions','categorie_id'=>'16'),
        array('id'=>'54','name'=>'Auto pièce et Accessoire','categorie_id'=>'16'),
        array('id'=>'56','name'=>'Bus','categorie_id'=>'16'),
        array('id'=>'57','name'=>'Moto','categorie_id'=>'16'),
        array('id'=>'58','name'=>'Vélo','categorie_id'=>'16'),
        array('id'=>'59','name'=>'Bus et camion pièce','categorie_id'=>'16'),

        array('id'=>'60','name'=>'Décoration pour fête','categorie_id'=>'17'),
        array('id'=>'61','name'=>'Décoration pour maison','categorie_id'=>'17'),

        array('id'=>'62','name'=>'Matériel de sport','categorie_id'=>'18'),
        array('id'=>'63','name'=>'Accessoire de sport','categorie_id'=>'18'),
        array('id'=>'64','name'=>'Complément','categorie_id'=>'18'),
        array('id'=>'65','name'=>'Camping','categorie_id'=>'18'),

        array('id'=>'66','name'=>'Jouet pour bébé','categorie_id'=>'19'),
        array('id'=>'67','name'=>'Jeux vidéo','categorie_id'=>'19'),
        array('id'=>'68','name'=>'Jeux d’extérieur et structure','categorie_id'=>'19'),
        array('id'=>'69','name'=>'Accessoire de jeux','categorie_id'=>'19'),

        array('id'=>'70','name'=>'Appartement','categorie_id'=>'20'),
        array('id'=>'71','name'=>'Villa','categorie_id'=>'20'),
        array('id'=>'72','name'=>'Terrain','categorie_id'=>'20'),
        array('id'=>'73','name'=>'Accessoire de maison et décoration','categorie_id'=>'20'),
        array('id'=>'74','name'=>'Matériel de cuisine et accessoire','categorie_id'=>'20'),
        array('id'=>'75','name'=>'Jardin','categorie_id'=>'20'),

        array('id'=>'76','name'=>'Module préfabriqué (chalet)','categorie_id'=>'21'),
        array('id'=>'77','name'=>'Cuisine équipe','categorie_id'=>'21'),
        array('id'=>'78','name'=>'Port et fenêtre et Accessoire','categorie_id'=>'21'),
        array('id'=>'79','name'=>'مواد البناء','categorie_id'=>'2&'),
        array('id'=>'80','name'=>'Matériaux de finition','categorie_id'=>'21'),
        array('id'=>'81','name'=>'Pierre et matériaux de carrière','categorie_id'=>'21'),

        array('id'=>'82','name'=>'Ordinateur portable, Netbook','categorie_id'=>'22'),
        array('id'=>'83','name'=>'Tablette','categorie_id'=>'22'),
        array('id'=>'84','name'=>'Composant et Accessoire ordinateur','categorie_id'=>'22'),
        array('id'=>'85','name'=>'Moniteur','categorie_id'=>'22'),
        array('id'=>'86','name'=>'Equipement de bureaux','categorie_id'=>'22'),
        array('id'=>'87','name'=>'Logiciel et mémoire stockage','categorie_id'=>'22'),

        array('id'=>'88','name'=>'Climatisation, réfrigérateur et congélation','categorie_id'=>'23'),
        array('id'=>'89','name'=>'Chauffage','categorie_id'=>'23'),
        array('id'=>'90','name'=>'Matériel de nettoyage','categorie_id'=>'23'),
        array('id'=>'91','name'=>'Appareil a buanderie et électroménager pour cuisine','categorie_id'=>'23'),
        array('id'=>'100','name'=>'Camera surveillance','categorie_id'=>'24'),
        array('id'=>'101','name'=>'Alarme et protection contre incendie','categorie_id'=>'24'),
        array('id'=>'102','name'=>'Equipement de protection','categorie_id'=>'24'),
        array('id'=>'103','name'=>'Système de contrôle d’accès','categorie_id'=>'24'),
        array('id'=>'104','name'=>'Coffre-fort, Serrurier, clé','categorie_id'=>'24'),

        array('id'=>'105','name'=>'Livre','categorie_id'=>'25'),
        array('id'=>'106','name'=>'Cahier, Accessoire d’écriture et papier','categorie_id'=>'25'),
        array('id'=>'107','name'=>'Matériel de Bureaux','categorie_id'=>'25'),

        array('id'=>'108','name'=>'Distributeur automatique','categorie_id'=>'26'),
        array('id'=>'109','name'=>'Matériel publicité','categorie_id'=>'26'),
        array('id'=>'111','name'=>'Equipement de nettoyage','categorie_id'=>'26'),
        array('id'=>'112','name'=>'Equipement pour hôtel et restauration ','categorie_id'=>'26'),
        array('id'=>'113','name'=>'Equipement supermarché','categorie_id'=>'26'),
        array('id'=>'114','name'=>'Matériel de laboratoire','categorie_id'=>'26'),

        array('id'=>'115','name'=>'Service d’imprimerie','categorie_id'=>'27'),
        array('id'=>'116','name'=>'Emballage','categorie_id'=>'27'),
        array('id'=>'117','name'=>'Produit pour l’étiquetage','categorie_id'=>'27'),
        array('id'=>'118','name'=>'Conditionnement','categorie_id'=>'27'),

        array('id'=>'119','name'=>'Plastique PVC','categorie_id'=>'28'),
        array('id'=>'120','name'=>'Plastique recycle','categorie_id'=>'28'),

        array('id'=>'121','name'=>'Machine','categorie_id'=>'29'),
        array('id'=>'122','name'=>'Outils','categorie_id'=>'29'),
        array('id'=>'123','name'=>'Equipement et matériel','categorie_id'=>'29'),

        array('id'=>'124','name'=>'حلويات الاعراس','categorie_id'=>'30'),
        array('id'=>'125','name'=>'اعمال يدوية','categorie_id'=>'30'),
        array('id'=>'126','name'=>'خياطتك','categorie_id'=>'30'),
        array('id'=>'127','name'=>'اعادة التدوير','categorie_id'=>'30'),

		);

            DB::table('subcategories')->insert($subcat);
    }
}
