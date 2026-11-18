<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trip_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_id')->constrained()->cascadeOnDelete();
            $table->timestamp('measured_at');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->float('speed_kmh')->nullable();
            $table->float('accuracy_m')->nullable();

            
            $table->index(['trip_id', 'measured_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trip_points');
    }
};
