<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader8 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->renameColumn('title', 'item');
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->renameColumn('item', 'title');
    });
}
}
