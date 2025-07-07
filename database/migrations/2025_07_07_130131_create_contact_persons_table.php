<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_persons', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('contact_person_name');
            $table->string('proof_of_title')->nullable();
            $table->string('street');
            $table->string('city');
            $table->string('postal_code');
            $table->string('state');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_persons');
    }
};
