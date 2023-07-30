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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stu_id')->constrained('students')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')->references('id')->on('students')->onUpdate('cascase')->onDelete('');
            $table->string('book');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};