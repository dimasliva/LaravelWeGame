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
          $table->string('name', 30);
          $table->integer('money')->default(1000);
          $table->integer('weight')->default(70);
          $table->integer('age')->default(18);
          $table->integer('energy')->default(100);
          $table->integer('health')->default(100);
          $table->integer('hungry')->default(0);
          $table->integer('power')->default(0);
          $table->integer('intellect')->default(0);
          $table->integer('lucky')->default(0);
          $table->integer('dirty')->default(0);
          $table->enum('drivecategory', ['Нет', 'A', 'B', 'C'])->default('Нет');
          $table->enum('profession', ['Безработный', 'Дворник', 'Заводчянин'])->default('Безработный');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
