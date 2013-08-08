<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Config;

class CreateSeorulesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        $table = Config::get('seorules::database.table');
        
        Schema::create($table, function($table) {
                    $table->increments('id');
                    $table->string('alias', 250);
                    $table->string('pattern', 250);
                    $table->string('route', 250);
                    $table->string('title', 250);
                    $table->string('description', 250);
                    $table->text('keywords');
                    $table->boolean('noindex');
                    $table->integer('priority');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop(Config::get('seorules::database.table'));
    }

}