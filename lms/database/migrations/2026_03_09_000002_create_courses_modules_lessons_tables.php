<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('owner_id')->constrained('users')->cascadeOnDelete();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->enum('doc_source', ['linux', 'bsd', 'custom'])->default('custom');
            $table->string('doc_path')->nullable();
            $table->timestamps();

            $table->index(['course_id', 'order']);
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->enum('type', ['text', 'file', 'link', 'video'])->default('text');
            $table->text('content')->nullable();
            $table->string('attachment_path')->nullable();
            $table->string('external_url')->nullable();
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();

            $table->index(['module_id', 'order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('courses');
    }
};

