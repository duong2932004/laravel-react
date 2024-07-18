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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('active_status_id');
            $table->foreignId('rank_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->integer('numberPhone')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Set foreign key constraints
            $table->foreign('active_status_id', 'fk_users_active_status')
                ->references('id')->on('active_statuses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('rank_id', 'fk_users_rank')
                ->references('id')->on('ranks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_users_active_status');
        });

        Schema::dropIfExists('users');
    }
};
