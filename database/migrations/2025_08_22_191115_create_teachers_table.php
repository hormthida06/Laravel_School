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
         Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->enum("gender", ['F', 'M']);
            $table->string("email", 50)->unique(); 
            $table->string("phone", 20)->nullable();
            $table->string("address", 100)->nullable();

            $table->unsignedBigInteger('subject_id')->nullable();

            $table->foreign('subject_id')
                  ->references('id')
                  ->on('subjects')  
                  ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
