<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValuesToAlbums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('album1s', function($table) {
            $table->string('popularity');
            $table->string('vocabulary');
            $table->string('rhymes');
            $table->string('similes');
            $table->string('profanity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('album1s', function($table) {
            $table->dropColumn('popularity');
            $table->dropColumn('vocabulary');
            $table->dropColumn('rhymes');
            $table->dropColumn('similes');
            $table->dropColumn('profanity');
        });
    }
}
