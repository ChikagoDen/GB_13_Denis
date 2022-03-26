<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('News', function (Blueprint $table) {
            $table->id();
            $table->string('Title',255);
            $table->text('Discription')->nullable();
            $table->text('DiscriptionCorotco')->nullable();
            $table->string('Avtor',255)->default("Admin");
            $table->enum('Status',['Черновик','Активный','Закрыт'])->default('Черновик');
            $table->string('Image',255)->nullable();
            $table->boolean('Active')->default(true);
            $table->foreignId('FK_Category');
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
        Schema::dropIfExists('News');
    }
}
