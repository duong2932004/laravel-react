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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('method_id');
            $table->foreignId('status_order_id');
            $table->integer('product_id');
            $table->integer('numberPhone');
            $table->integer('address');
            $table->timestamps();

            $table->foreign('user_id','fk_orders_users')->references('id')
            ->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('method_id','fk_orders_methods')->references('id')
            ->on('methods')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status_order_id','fk_orders_statuses')->references('id')
                ->on('status_oders')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
