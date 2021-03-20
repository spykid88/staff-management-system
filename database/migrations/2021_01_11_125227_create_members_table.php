<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::create('members', function (Blueprint $table) {
        //     $table->increments('id')->length(11);
        //     //$table->string('empno',10);
        //     $table->Integer('empno')->length(11);
        //     $table->string('name',32)->nullable();
        //     $table->unsignedInteger('typeflag')->length(11)->nullable();
        //     $table->string('dep',32)->nullable();
        //     $table->string('gender',11)->nullable();
        //     $table->string('email',258)->unique()->nullable();
        //     $table->timestamps();
        // });

        Schema::create('members', function (Blueprint $table) {
            $table->integer('id')->length(11);
            $table->string('empno',10)->unique();
            //$table->unsignedInteger('empno')->length(11)->unique();
            $table->string('name',32)->nullable();
            $table->unsignedInteger('typeflag')->length(11)->nullable();
            $table->string('dep',32)->nullable();
            $table->string('gender',11)->nullable();
            $table->string('email',258)->unique()->nullable();
            $table->timestamps();

            //PK設定
            $table->primary(['id','empno']);
        });

        Schema::table('members', function (Blueprint $table) {
            $table->increments('id')->change();
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
