<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader9 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->text('basefile');
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->dropColumn('basefile');
    });
}
}
