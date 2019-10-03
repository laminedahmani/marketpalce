<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 255)->nullable();
			
		//foreign id of categorie
			$table->integer('categorie_id')->unsigned();
			$table->foreign('categorie_id')
				  ->references('id')
				  ->on('categories')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
				  
      
			
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('subcategories', function(Blueprint $table) {
			$table->dropForeign('subcategories_categories_id_foreign');	
		});
        Schema::dropIfExists('subcategories');
    }
}
