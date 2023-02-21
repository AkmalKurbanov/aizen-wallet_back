<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies7 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->dropColumn('slug');
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('slug')->nullable();
    });
}
}
