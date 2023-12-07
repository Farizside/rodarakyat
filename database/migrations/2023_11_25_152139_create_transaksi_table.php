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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mobil_id');
            $table->integer('duration');
            $table->datetime('time_start');
            $table->datetime('time_end');
            $table->integer('total');
            $table->string('payment_proof');
            $table->enum('status',['Finished', 'Unfinished', 'Pending']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mobil_id')->references('id')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
