<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
		    $table->string('categorie');
			$table->string('ville');
			$table->string('titre');
			$table->string('description');
			$table->integer('prix');
			$table->integer('quantite');
			$table->integer('prix_livraison');
			$table->integer('deli_livraison');
			
			//foreign id of membre
			$table->integer('membre_id')->unsigned();
			$table->foreign('membre_id')
				  ->references('id')
				  ->on('membres')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
				  
			//foreign id of boutique
			$table->integer('boutique_id')->unsigned();
			$table->foreign('boutique_id')
				  ->references('id')
				  ->on('boutiques')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
				  
			
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('annonces', function(Blueprint $table) {
			$table->dropForeign('annonces_membres_id_foreign');
			
		});
		Schema::table('annonces', function(Blueprint $table) {
			$table->dropForeign('annonces_boutiques_id_foreign');
			
		});
        Schema::dropIfExists('annonces');
    }
}
