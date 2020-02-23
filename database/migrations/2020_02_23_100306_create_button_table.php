<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateButtonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('button', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->integer('button_id');
            $table->char('title',255);
            $table->char('link',255);
            $table->char('color',255);
            $table->timestamp('last_update')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('button');
    }
}
