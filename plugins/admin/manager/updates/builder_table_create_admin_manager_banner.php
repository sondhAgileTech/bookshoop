<?php namespace Admin\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminManagerBanner extends Migration
{
    public function up()
    {
        Schema::create('admin_manager_banner', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('name', 191)->nullable();
            $table->text('description')->nullable();
            $table->string('link', 191)->nullable();
            $table->string('img', 300)->nullable();
            $table->string('page', 191)->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_manager_banner');
    }
}
