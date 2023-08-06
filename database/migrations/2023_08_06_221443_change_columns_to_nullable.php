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
        Schema::table('events_outsourcing', function (Blueprint $table) {
            $table->string('zoom_url')->nullable()->change();
            $table->string('announcement_responsible')->nullable()->change();
            $table->string('announcement')->nullable()->change();
            $table->boolean('announcement_sending')->nullable()->change();
            $table->string('archive')->nullable()->change();
            $table->string('archive_url')->nullable()->change();
            $table->boolean('archive_sending')->nullable()->change();
            $table->string('thumbnail_material')->nullable()->change();
            $table->string('thumbnail')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events_outsourcing', function (Blueprint $table) {
            $table->string('zoom_url')->nullable(false)->change();
            $table->string('announcement_responsible')->nullable(false)->change();
            $table->string('announcement')->nullable(false)->change();
            $table->boolean('announcement_sending')->nullable(false)->change();
            $table->string('archive')->nullable(false)->change();
            $table->string('archive_url')->nullable(false)->change();
            $table->boolean('archive_sending')->nullable(false)->change();
            $table->string('thumbnail_material')->nullable(false)->change();
            $table->string('thumbnail')->nullable()->change(false);
        });
    }
};
