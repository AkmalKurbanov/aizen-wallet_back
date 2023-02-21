<?php namespace Aizen\Menuheader\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenMenuheader3 extends Migration
{
    public function up()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->string('item', 255)->nullable(false)->unsigned(false)->default(null)->change();
    });
}

public function down()
{
    Schema::table('aizen_menuheader_', function($table)
    {
        $table->text('item')->nullable(false)->unsigned(false)->default(null)->change();
    });
}
}
