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
        Schema::create('answer_major', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("major_id");
            $table->unsignedBigInteger("answer_id");
            $table->smallInteger("weight");
            $table->timestamps();

            $table->foreign("major_id")->references("id")->on("majors")->onUpdate("cascade")->onDelete("cascade");
            $table->foreign("answer_id")->references("id")->on("answers")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_university');
    }
};
