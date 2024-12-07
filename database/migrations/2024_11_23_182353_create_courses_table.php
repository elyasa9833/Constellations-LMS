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
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('creator_id');
            $table->uuid('category_id');
            $table->string('name');
            $table->text('description');
            $table->string('banner')->nullable();
            $table->string('cover')->nullable();
            $table->integer('total_experience');
            $table->enum('status', ['draft', 'under_review', 'needs_revision', 'live', 'inactive'])->default('draft');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('course_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
