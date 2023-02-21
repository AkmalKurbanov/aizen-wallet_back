<?php namespace Aizen\Customerscomments\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAizenCustomerscomments extends Migration
{
    public function up()
{
    Schema::create('aizen_customerscomments_', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name');
        $table->text('comment');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('aizen_customerscomments_');
}
}
