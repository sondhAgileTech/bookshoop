<?php namespace Admin\Manager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminManagerGame extends Migration
{
    public function up()
    {
        Schema::table('admin_manager_game', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_manager_game', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->string('name', 191)->default('NULL')->change();
            $table->text('description')->default('NULL')->change();
        });
    }
}
