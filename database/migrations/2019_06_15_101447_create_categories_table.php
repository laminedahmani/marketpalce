<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 155)->nullable();
		    $table->int('nbr_annonces')->default(0);
			$table->string('logo_url', 255)->nullable();
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
	
        Schema::dropIfExists('categories');
    }
}
