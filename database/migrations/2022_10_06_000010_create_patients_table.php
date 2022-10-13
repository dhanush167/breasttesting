<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('reg_no');
            $table->date('reg_date');
            $table->integer('age');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('marital_status');
            $table->boolean('children')->nullable();
            $table->mediumText('address');
            $table->longText('reason_for_visit')->nullable();
            $table->longText('pmhx')->nullable();
            $table->longText('pshx')->nullable();
            $table->date('pre_pap_date')->nullable();
            $table->longText('pre_pap_result')->nullable();
            $table->date('pre_uss_date')->nullable();
            $table->longText('pre_uss_result')->nullable();
            $table->date('pre_hpv_date')->nullable();
            $table->longText('pre_hpv_result')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
