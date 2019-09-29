<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutiques', function (Blueprint $table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password', 20);
			$table->rememberToken();
			$table->string('type_magasin');
			$table->integer('nbr_annonce_autorise');
			$table->string('nom');
			$table->string('prenom');
			$table->string('nom_magasin');
			$table->string('tel', 15);
			$table->string('address');
			$table->string('secteur_activite');
			$table->string('presentation');
			$table->string('url_photo');
            $table->integer('nbr_vue');
            $table->string('pack', 20);
			$table->boolean('Activated')->default(false);
			
				//foreign id of state wilaya id
			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')
				  ->references('id')
				  ->on('states')
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
			Schema::table('boutiques', function(Blueprint $table) {
			$table->dropForeign('boutiques_states_id_foreign');	
		});
        Schema::dropIfExists('boutiques');
    }
}
