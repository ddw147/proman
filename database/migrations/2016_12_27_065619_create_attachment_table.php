<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('attachemnts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_type');
            $table->integer('owner_id');
            $table->string('caption');
            $table->text('description')->nullable();
            $table->string('path');
            $table->integer('user_id')->unsigned();
          	$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
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
        Schema::drop('attachemnts');
    }
}
