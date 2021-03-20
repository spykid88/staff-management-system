<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::create('contracts', function (Blueprint $table) {
        //     $table->increments('contract_id')->length(11);
        //     $table->unsignedInteger('emp_id')->length(11);
        //     //$table->foreign('emp_id')->references('id')->on('members');
        //     $table->foreign('emp_id')->references('empno')->on('members');
        //     $table->unsignedInteger('status_flag')->length(11);
        //     $table->string('contract_comp',250);
        //     $table->string('contract_dep',250);
        //     $table->dateTime('contract_start_date');
        //     $table->dateTime('contract_end_date');
        //     $table->dateTime('brc_contract_start_date');
        //     $table->dateTime('brc_contract_end_date');
        //     $table->dateTime('brc_staff_start_date');
        //     $table->timestamps();
        // });

        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('contract_id')->length(11);
            //$table->unsignedInteger('emp_id')->length(11);
            $table->string('emp_id',10);
            //$table->foreign('emp_id')->references('id')->on('members');
            //$table->foreign('emp_id')->references('empno')->on('members');
            $table->unsignedInteger('status_flag')->length(11);
            $table->string('contract_comp',250);
            $table->string('contract_dep',250);
            $table->dateTime('contract_start_date');
            $table->dateTime('contract_end_date');
            $table->dateTime('brc_contract_start_date');
            $table->dateTime('brc_contract_end_date');
            $table->dateTime('brc_staff_start_date');
            $table->timestamps();
        });

        Schema::table('contracts', function (Blueprint $table) {
            // $table->foreign('emp_id')->references('empno')->on('members')->onDelete('cascade');
            $table->foreign('emp_id')->references('empno')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
