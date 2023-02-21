<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies11 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('slug')->nullable()->change();
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('slug')->nullable(false)->change();
    });
}
}
