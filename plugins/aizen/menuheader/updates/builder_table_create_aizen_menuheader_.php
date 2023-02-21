<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAizenMenuheader extends Migration
{
    public function up()
{
    Schema::create('aizen_menuheader_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('item');
        $table->text('inslide_item_list');
    });
}

public function down()
{
    Schema::dropIfExists('aizen_menuheader_');
}
}
