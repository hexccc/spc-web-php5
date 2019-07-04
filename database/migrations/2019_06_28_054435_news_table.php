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
          $table->string('thumbnail')->nullable();
          $table->string('video')->nullable();
          $table->string('created_by')->nullable();
          $table->string('updated_by')->nullable();
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
