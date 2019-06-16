<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
			
            $table->integer('recever_id')->unsigned()->index(); // the id of recpter in table membres
			$table->foreign('recever_id')->references('id')->on('membres');
			$table->integer('sender_id')->unsigned()->index(); // the id of sender in table membres
			$table->foreign('sender_id')->references('id')->on('membres');
			
			$table->string('titre');
			$table->string('description');	
			$table->timestamp('date_d_envoi');
			
			
			$table->softDeletes();
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
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_membres_id_foreign');
			
		});
        Schema::dropIfExists('messages');
    }
}
