<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExceldataCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('exceldata', function (Blueprint $table)
		{
			$table->increments('id');
			$table->string('department');
			$table->string('name');
			$table->integer('no');
			$table->date('datetime');
			$table->integer('locationid');
			$table->integer('idnumber');
			$table->string('verifycode');
			$table->integer('cardno');
			$table->timestamps();
		});
		
		
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('exceldata');
    }
}
