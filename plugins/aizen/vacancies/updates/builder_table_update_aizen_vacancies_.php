<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->integer('sort_order');
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->dropColumn('sort_order');
    });
}
}
