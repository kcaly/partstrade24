<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();

            $table->string('id_link')->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name')->nullable();
            $table->tinyInteger('gender')->nullable();

            $table->string('phone');
            $table->string('email');

            $table->string('address_street');
            $table->string('address_number');
            $table->string('address_code');
            $table->string('address_town');
            $table->string('address_country');

            $table->date('birth_date');
            $table->string('birth_town');
            $table->string('birth_country');
            $table->string('marital_status')->nullable();

            $table->string('bank')->nullable();
            $table->string('bic')->nullable();
            $table->string('iban')->nullable();

            $table->string('sozialversicherungsnummer')->nullable();
            $table->string('steuer_id')->nullable();
            $table->string('krankenkasse')->nullable();
            $table->string('versichertennummer')->nullable();

            $table->tinyInteger('application_status')->default(0);
            $table->string('application_comment')->nullable();
            $table->string('application_information')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
