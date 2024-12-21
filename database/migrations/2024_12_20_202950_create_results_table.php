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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("university1"); // [1 => 30%]
            $table->unsignedBigInteger("university2");
            $table->unsignedBigInteger("university3");
            $table->smallInteger("university1_prob");
            $table->smallInteger("university2_prob");
            $table->smallInteger("university3_prob");
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("university1")->references("id")->on("universities")->onUpdate("cascade")->onUpdate("cascade");
            $table->foreign("university2")->references("id")->on("universities")->onUpdate("cascade")->onUpdate("cascade");
            $table->foreign("university3")->references("id")->on("universities")->onUpdate("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
