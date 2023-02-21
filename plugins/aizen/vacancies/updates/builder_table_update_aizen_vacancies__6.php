<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenVacancies6 extends Migration
{
    public function up()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('position')->nullable()->change();
        $table->text('category')->nullable()->change();
        $table->text('location')->nullable()->change();
        $table->integer('sort_order')->nullable()->change();
        $table->text('text')->nullable()->change();
    });
}

public function down()
{
    Schema::table('aizen_vacancies_', function($table)
    {
        $table->text('position')->nullable(false)->change();
        $table->text('category')->nullable(false)->change();
        $table->text('location')->nullable(false)->change();
        $table->integer('sort_order')->nullable(false)->change();
        $table->text('text')->nullable(false)->change();
    });
}
}
