<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->string('title');  // Task title
            $table->text('description')->nullable();  // Task description (nullable)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Foreign key referencing the 'users' table
            $table->timestamps();  // Created at & updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');  // Rollback (drop) the 'tasks' table
    }
}
