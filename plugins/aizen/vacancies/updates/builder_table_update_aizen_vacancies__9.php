<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies9 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->boolean('is_active')->default(0)->change();
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->boolean('is_active')->default(null)->change();
    });
}
}
