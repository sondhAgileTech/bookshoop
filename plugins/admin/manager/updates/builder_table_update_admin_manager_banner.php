<?php namespace Admin\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminManagerBanner extends Migration
{
    public function up()
    {
        Schema::table('admin_manager_banner', function($table)
        {
            $table->increments('id')->change();
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->string('link', 191)->default('null')->change();
            $table->string('img', 300)->default('null')->change();
            $table->string('page', 191)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_manager_banner', function($table)
        {
            $table->integer('id')->change();
            $table->string('name', 191)->default('NULL')->change();
            $table->text('description')->default('NULL')->change();
            $table->string('link', 191)->default('NULL')->change();
            $table->string('img', 300)->default('NULL')->change();
            $table->string('page', 191)->default('NULL')->change();
        });
    }
}
