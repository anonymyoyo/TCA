<?php

use App\Models\Agence;
use App\Models\Association;
use App\Models\Role;
use App\Models\Zone;
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
        Schema::create('commercials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('ville');
            $table->foreignIdFor(Agence::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Role::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Association::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('pays');
            $table->string('identification');
            $table->string('image');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commercials');
    }
};
