<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by LaravelMigration.spBundle
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('presenter_id')->nullable();
            $table->string('url', 255)->nullable();
            $table->text('description');
            $table->string('summary', 255)->nullable();
            $table->text('notes')->nullable();
            $table->nullableTimestamps();
            $table->softDeletes();

            

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentations');
    }
}
