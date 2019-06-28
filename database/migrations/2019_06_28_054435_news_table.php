<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news_table', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('subtitle');
          $table->longText('content');
          $table->string('thumbnail');
          $table->string('video');
          $table->string('created_by');
          $table->string('updated_by');
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
        //
    }
}
