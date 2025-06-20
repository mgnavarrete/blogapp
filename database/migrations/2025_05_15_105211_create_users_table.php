<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female', 'undefined']);
            $table->date('birthdate');
            $table->string('profession')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_image')->nullable();
            $table->rememberToken(); // <--- esta línea es clave
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
