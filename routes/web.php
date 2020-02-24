<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

/*Route::get('1', function() { return 'Je suis la page 1 !'; });

Route::get('2', function() { return 'Je suis la page 2 !'; });

Route::get('3', function() { return 'Je suis la page 3 !'; });

Route::get('/hello/{name}', function ($name) {
    return view ('', ['name' => $name, 'msg' => 'Ciaos']);
});

Route::get('{n}', function($n) {
    return 'ALTERNATIVE VINTAGE ROCK ' . $n . ' !';
});*/

/*Route::get('/', function() {
    return view('vue1');
});*/

Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', 'ContactsController@create')->name('contact.create');

Route::post('contact', 'ContactsController@store')->name('contact.store');


/*<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('title', 255);
            $table->string('comment', 255);
            
            $table->timestamps();
            $table->foreign('user_id', 'cmts_ctct_fk')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   /* public function down()
    {
        Schema::dropIfExists('comments');
    }
}*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
