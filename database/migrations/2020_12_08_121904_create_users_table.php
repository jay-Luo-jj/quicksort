<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name', 64)->nullable();
            $table->string('username', 32)->unique();
            $table->string('email', 320)->unique();
            $table->string('contact_details', 2000)->nullable();
            $table->string('photo', 320)->nullable();
            $table->string('location', 32)->nullable();
            $table->boolean('marketing_consent')->default(false);

            $table->string('password', 64);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }
}
