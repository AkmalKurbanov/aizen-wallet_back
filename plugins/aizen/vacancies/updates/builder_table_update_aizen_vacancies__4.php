<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies4 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->integer('sort_order')->default(1)->change();
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->integer('sort_order')->default(null)->change();
    });
}
}
