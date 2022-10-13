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
        Schema::table('patient_managment_plans', function (Blueprint $table) {
            $table
                ->foreign('checklist_id')
                ->references('id')
                ->on('checklists')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patient_managment_plans', function (Blueprint $table) {
            $table->dropForeign(['checklist_id']);
            $table->dropForeign(['patient_id']);
        });
    }
};
