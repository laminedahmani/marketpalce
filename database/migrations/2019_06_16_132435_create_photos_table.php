<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
		    $table->string('url_photo');
			
				
			//foreign id of annonces
			$table->integer('annonce_id')->unsigned();
			$table->foreign('annonce_id')
				  ->references('id')
				  ->on('annonces')
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
		Schema::table('photos', function(Blueprint $table) {
			$table->dropForeign('photos_annonces_id_foreign');
			
		});
        Schema::dropIfExists('photos');
    }
}
