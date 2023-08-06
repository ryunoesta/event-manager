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
        Schema::table('events', function (Blueprint $table) {
            $table->date('date')->nullable()->change();
            $table->string('time', 11)->nullable()->change();
            $table->string('category')->nullable()->change();;
            $table->string('title')->nullable()->change();;
            $table->string('content')->nullable()->change();;
            $table->string('content_details')->nullable()->change();;
            $table->string('target')->nullable()->change();;
            $table->boolean('public')->nullable()->change();;
            $table->string('guest')->nullable()->change();;
            $table->string('host')->nullable()->change();;
            $table->string('assistant')->nullable()->change();;
            $table->boolean('host_check')->nullable()->change();;
            $table->string('review')->nullable()->change();;
            $table->integer('participants')->nullable()->change();;
            $table->integer('camera_on')->nullable()->change();;
            $table->integer('questionnaires')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->date('date')->nullable(false)->change();
            $table->time('time', 11)->nullable(false)->change();
            $table->string('category')->nullable(false)->change();;
            $table->string('title')->nullable(false)->change();;
            $table->string('content')->nullable(false)->change();;
            $table->string('content_details')->nullable(false)->change();;
            $table->string('target')->nullable(false)->change();;
            $table->boolean('public')->nullable(false)->change();;
            $table->string('guest')->nullable(false)->change();;
            $table->string('host')->nullable(false)->change();;
            $table->string('assistant')->nullable(false)->change();;
            $table->boolean('host_check')->nullable(false)->change();;
            $table->string('review')->nullable(false)->change();;
            $table->integer('participants')->nullable(false)->change();;
            $table->integer('camera_on')->nullable(false)->change();;
            $table->integer('questionnaires')->nullable(false)->change();;
        });
    }
};
