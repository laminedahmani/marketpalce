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
			$table->string('password', 60);
			$table->rememberToken();
			$table->string('type_magasin');
			$table->integer('nbr_annonce_autorise');
			$table->string('nom');
			$table->string('prenom');
			$table->string('ville');
			$table->double('tel',9, 0);
			$table->string('address');
			$table->string('secteur_activite');
			$table->string('presentation');
			$table->string('url_photo');
            $table->integer('nbr_vue');
            $table->integer('pack');
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
        Schema::dropIfExists('boutiques');
    }
}
