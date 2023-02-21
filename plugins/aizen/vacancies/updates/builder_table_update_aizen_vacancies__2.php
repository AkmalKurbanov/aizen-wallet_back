<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies2 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('text');
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->dropColumn('text');
    });
}
}
