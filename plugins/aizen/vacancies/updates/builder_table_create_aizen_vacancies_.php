<?php namespace Aizen\Vacancies\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAizenVacancies extends Migration
{
    public function up()
{
    Schema::create('aizen_vacancies_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('position');
        $table->text('category');
        $table->text('location');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('aizen_vacancies_');
}
}
