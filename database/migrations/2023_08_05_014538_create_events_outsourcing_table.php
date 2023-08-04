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
        Schema::create('events_outsourcing', function (Blueprint $table) {
            $table->id();
            $table->string('zoom_url');
            $table->string('announcement_responsible');
            $table->string('announcement');
            $table->boolean('announcement_sending');
            $table->string('archive');
            $table->string('archive_url');
            $table->boolean('archive_sending');
            $table->string('thumbnail_material');
            $table->string('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_outsourcing');
    }
};
