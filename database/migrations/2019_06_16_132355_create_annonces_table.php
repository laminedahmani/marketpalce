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
			$table->string('titre')->nullable();
			$table->string('description')->nullable();
			$table->string('type_annonce')->nullable();
			$table->decimal('prix',15, 2)->nullable();
			$table->integer('quantite')->nullable();
		    $table->decimal('prix_livraison',15, 2)->nullable();
			$table->integer('deli_livraison')->nullable();
			$table->decimal('prix_solde',15, 2)->nullable();
			$table->boolean('Activated')->default(false);
		    $table->integer('nbr_vue');
			//foreign id of membre
			$table->integer('membre_id')->unsigned()->nullable();
			$table->foreign('membre_id')
				  ->references('id')
				  ->on('membres')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
				  
			//foreign id of boutique
			$table->integer('boutique_id')->unsigned()->nullable();
			$table->foreign('boutique_id')
				  ->references('id')
				  ->on('boutiques')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
				  
		//foreign id of state wilaya id
			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')
				  ->references('id')
				  ->on('states')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');		  
			
	  
			//foreign id of categorie
			$table->integer('categorie_id')->unsigned();
			$table->foreign('categorie_id')
				  ->references('id')
				  ->on('categories')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
				  
				  
		   //foreign id of sub_categorie
			$table->integer('subcategorie_id')->unsigned();
			$table->foreign('subcategorie_id')
				  ->references('id')
				  ->on('subcategories')
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
		
		
		Schema::table('annonces', function(Blueprint $table) {
			$table->dropForeign('annonces_states_id_foreign');	
		});
		
		Schema::table('annonces', function(Blueprint $table) {
			$table->dropForeign('annonces_categories_id_foreign');	
		});
		Schema::table('annonces', function(Blueprint $table) {
			$table->dropForeign('annonces_subcategories_id_foreign');	
		});
		
		
        Schema::dropIfExists('annonces');
    }
}
