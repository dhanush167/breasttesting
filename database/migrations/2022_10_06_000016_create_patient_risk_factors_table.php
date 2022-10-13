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
        Schema::create('patient_risk_factors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id');
            $table->string('age_of_menarche')->nullable();
            $table->string('lrmp')->nullable();
            $table->string('ocp')->nullable();
            $table->string('hrt')->nullable();
            $table->string('age_of_menopause')->nullable();
            $table->string('post_menopausal_bleeding')->nullable();
            $table->string('betel_chewing')->nullable();
            $table->string('areca_nut')->nullable();
            $table->string('smoking')->nullable();
            $table->string('alcohol')->nullable();
            $table->text('other_risk_factor')->nullable();
            $table->string('sexual_hx')->nullable();
            $table->boolean('occupation_radiation')->nullable();

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
        Schema::dropIfExists('patient_risk_factors');
    }
};
