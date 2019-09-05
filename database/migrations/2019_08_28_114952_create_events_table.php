<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                ->references('id')->on('categories');
            $table->string('name');
            $table->index('name');
            $table->string('slug');
            $table->string('oneliner');
            $table->boolean('published')->default(false);
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable();
            $table->integer('max_attendees')->default(0);
            $table->string('venue');
            $table->string('street')->nullable();
            $table->string('city');
            $table->index('city');
            $table->bigInteger('state_id')->unsigned()->nullable();
            $table->foreign('state_id')
                ->references('id')->on('states');
            $table->string('zip');
            $table->decimal('lat', 11, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->text('description');
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
        Schema::dropIfExists('events');
    }
}
