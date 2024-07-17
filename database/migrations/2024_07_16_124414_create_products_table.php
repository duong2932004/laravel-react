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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('active_status_id');
            $table->string('name');
            $table->integer('price');
            $table->string('avatar');
            $table->string('description', 255);
            $table->integer('quantity')->default(0);
            $table->integer('sold')->default(0);
            $table->timestamps();

            // Set foreign key constraints
            $table->foreign('active_status_id', 'fk_products_active_status')
                ->references('id')->on('active_statuses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('fk_products_active_status');
        });

        Schema::dropIfExists('products');
    }
};
