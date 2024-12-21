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
            $table->unsignedBigInteger("major1")->nullable();
            $table->unsignedBigInteger("major2")->nullable();
            $table->unsignedBigInteger("major3")->nullable();
            $table->smallInteger("major1_prob")->nullable();
            $table->smallInteger("major2_prob")->nullable();
            $table->smallInteger("major3_prob")->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("major1")->references("id")->on("majors")->onUpdate("cascade")->onUpdate("cascade");
            $table->foreign("major2")->references("id")->on("majors")->onUpdate("cascade")->onUpdate("cascade");
            $table->foreign("major3")->references("id")->on("majors")->onUpdate("cascade")->onUpdate("cascade");
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
