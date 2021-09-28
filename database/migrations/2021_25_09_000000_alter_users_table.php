<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class AlterUsersTable extends Migration
{
public function up()
{
Schema::table('users', function (Blueprint $table) {
$table->text('address');
$table->boolean('type')->default(0);
});
}
public function down()
{
Schema::table('users', function (Blueprint $table) {
$table->dropColumn(['address']);
$table->dropColumn(['type']);
});
}
}