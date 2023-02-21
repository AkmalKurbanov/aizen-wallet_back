<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies8 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->boolean('is_active');
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->dropColumn('is_active');
    });
}
}
