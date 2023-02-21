<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader6 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->dropColumn('deleted_at');
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->timestamp('deleted_at')->nullable();
    });
}
}
