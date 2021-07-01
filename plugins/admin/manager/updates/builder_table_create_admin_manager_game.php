<?php namespace Admin\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminManagerGame extends Migration
{
    public function up()
    {
        Schema::create('admin_manager_game', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_manager_game');
    }
}
