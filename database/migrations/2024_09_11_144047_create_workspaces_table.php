<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workspaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('about');
            $table->decimal('price');
            $table->smallInteger('discount_value')->default(0);
            $table->enum('discount_type', ['fixed', 'percentage'])->default('fixed');
            $table->integer('capacity');
            $table->string('working_days_except');
            $table->timestamp('open_at');
            $table->timestamp('closed_at');
            $table->boolean('is_sharedspace')->default(0);
            $table->boolean('approved')->default(0);
            $table->foreignId('owner_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->boolean('available')->default(0);
            $table->decimal('price');
            $table->foreignId('workspace_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('brief');
            $table->text('content');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('workspace_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('workspaces');
    }
};
