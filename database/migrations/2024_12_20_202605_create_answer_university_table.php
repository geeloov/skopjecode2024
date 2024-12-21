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
        Schema::create('answer_university', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("university_id");
            $table->unsignedBigInteger("answer_id");
            $table->smallInteger("weight");
            $table->timestamps();

            $table->foreign("university_id")->references("id")->on("universities")->onUpdate("cascade")->onDelete("cascade");
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
