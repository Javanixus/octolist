<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_title', 50);
            $table->integer('project_creator')->unsigned();
            $table->date('project_deadline')->nullable();
            $table->timestamps();
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('project_creator')
                  ->references('id')
                  ->on('teachers');
        });

        Schema::table('project_members', function (Blueprint $table) {
            $table->foreign('id_projects')
                ->references('id')
                ->on('projects');
        });

        Schema::table('project_cards', function (Blueprint $table) {
            $table->foreign('id_projects')
                ->references('id')
                ->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
