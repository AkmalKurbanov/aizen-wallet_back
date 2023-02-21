<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies10 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('slug');
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->dropColumn('slug');
    });
}
}
