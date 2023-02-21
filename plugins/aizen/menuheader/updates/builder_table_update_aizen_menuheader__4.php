<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader4 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->boolean('slider_tabs');
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->dropColumn('slider_tabs');
    });
}
}
