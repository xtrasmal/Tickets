<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tickets', function(Blueprint $t)
        {
            $t->increments('id')->unique();
            $t->text('description');
            $t->integer('type_id');
            $t->integer('priority_id');
            $t->integer('resolution_id');
            $t->integer('status_id');
            $t->integer('department_id');
            $t->integer('assignee_id');
            $t->integer('reporter_id');
            $t->timestamp('due_on')->nullable();
            $t->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $t->timestamp('updated_at');
            $t->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('tickets');
	}

}
