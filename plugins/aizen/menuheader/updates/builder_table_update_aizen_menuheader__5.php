<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader5 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->integer('sort_order');
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->dropColumn('sort_order');
    });
}
}
