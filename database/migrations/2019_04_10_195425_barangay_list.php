<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BarangayList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brgys', function(Blueprint $table) {
					$table->increments('brgy_id');
					$table->string('brgy_name');
					$table->string('brgy_district');
					$table->string('brgy_code');
					$table->string('brgy_chairman');
					$table->string('brgy_contact');
					$table->string('brgy_population');
					$table->string('brgy_area');
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
