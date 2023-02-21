<?php namespace Aizen\Faq\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAizenFaq extends Migration
{
    public function up()
{
    Schema::create('aizen_faq_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('question');
        $table->text('answer');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('aizen_faq_');
}
}
