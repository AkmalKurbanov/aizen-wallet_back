<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader2 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->string('link');
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->dropColumn('link');
    });
}
}
