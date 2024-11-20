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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreignId('tour_package_id')->constrained('packages')->onDelete('cascade'); // Foreign key to tour_packages table
            $table->dateTime('purchase_date');
            $table->dateTime('departure_date');
            $table->enum('status', ['Pending', 'Confirmed', 'Cancelled']);
            $table->decimal('total_price', 10, 2);
            $table->enum('payment_status', ['Paid', 'Pending']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
