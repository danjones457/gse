<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStatsTableWithCardsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stats', function (Blueprint $table) {
            $table->integer('yellow_cards')->after('clean_sheets')->nullable();
            $table->integer('red_cards')->after('yellow_cards')->nullable();
            $table->integer('assists')->after('clean_sheets')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stats', function (Blueprint $table) {
            $table->dropColumn('yellow_cards');
            $table->dropColumn('red_cards');
            $table->dropColumn('assists');
        });
    }
}
