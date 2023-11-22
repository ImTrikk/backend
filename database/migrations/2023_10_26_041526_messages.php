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
        // define the attributes for the table
        Schema::create('messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->string('message')->nullable();
            $table->string('sender');
            $table->timestamps();

            // Add a foreign key column
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'messages' table if needed
        Schema::dropIfExists('messages');
    }
};
