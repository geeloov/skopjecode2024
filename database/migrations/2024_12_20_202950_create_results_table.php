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
            $table->unsignedBigInteger("major1"); // [1 => 30%]
            $table->unsignedBigInteger("major2");
            $table->unsignedBigInteger("major3");
            $table->smallInteger("major1_prob");
            $table->smallInteger("major2_prob");
            $table->smallInteger("major3_prob");
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
