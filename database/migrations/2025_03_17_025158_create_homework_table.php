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
        Schema::create('homework', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('file_attachment')->nullable();
            $table->unsignedBigInteger('assigned_by')->nullable();
            $table->string('grade')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->date('due_date')->nullable();
            $table->enum('status', ['active', 'completed'])->default('active')->nullable();
            $table->boolean('notify_parents')->default(true)->nullable();
            $table->string('sms_message')->nullable();
            $table->timestamps();

            $table->index(['grade', 'subject_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homework');
    }
};
