<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->uuid('uuid', 191)->unique();
            $table->string('nama', 191)->index();
            $table->enum('type', ['personal', 'perusahaan'])->default('personal');
            $table->integer('user_id')->unsigned()->nullable()->index();
			$table->timestamps();
			$table->softDeletes();			
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}