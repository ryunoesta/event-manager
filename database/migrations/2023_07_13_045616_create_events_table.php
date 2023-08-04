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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->char('time', 11);
            $table->string('category');
            $table->string('title');
            $table->string('content');
            $table->string('content_details');
            $table->string('target');
            $table->boolean('public');
            $table->string('guest');
            $table->string('host');
            $table->string('assistant');
            $table->boolean('host_check');
            $table->string('review');
            $table->integer('participants');
            $table->integer('camera_on');
            $table->integer('questionnaires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
