<?php
/**
 * Author: Wesley
 * Date: 30-Dec-14
 * Time: 12:00
 */

use Illuminate\Database\Migrations\Migration;

class CreateSentryUserRolesTable extends Migration {

	public function up() {

		Schema::create('sentry_user_roles', function($table) {

			$table->integer('user_id');
			$table->string('role', 32);

			$table->primary(['user_id', 'role']);
		});

	}

	public function down() {
		Schema::drop('sentry_user_roles');
	}

}