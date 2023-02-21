<?php namespace Aizen\Faq\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAizenFaq extends Migration
{
    public function up()
{
    Schema::table('aizen_faq_', function($table)
    {
        $table->boolean('is_active');
    });
}

public function down()
{
    Schema::table('aizen_faq_', function($table)
    {
        $table->dropColumn('is_active');
    });
}
}
