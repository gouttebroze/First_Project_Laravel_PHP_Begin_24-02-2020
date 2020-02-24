<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;


class CreatePostsTable extends Migration {

    public function up()
    {
    	Schema::create('posts', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('titre', 80);
			$table->text('contenu');
            
            $table->bigInteger('parent_id')->unsigned()->index();
$table->foreign('parent_id')->references('id')->on('parent');
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_user_id_foreign');
		});
		Schema::drop('posts');
	}

}
