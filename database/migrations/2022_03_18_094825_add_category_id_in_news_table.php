<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdInNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
           $table->foreignId('fk_categori_id')
                ->after('id')
                ->constrained('categories')
                ->onDelete('cascade');
           $table->index('status','avtor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('News', function (Blueprint $table) {
            $table->dropIndex('status','avtor');
            $table->dropForeign('fk_categori_id');
            $table->dropColumn('fk_categori_id');
        });
    }
}
