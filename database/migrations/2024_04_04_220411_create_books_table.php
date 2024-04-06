<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('synopsis');
            $table->decimal('price', 8, 2);
            //created at and updated at
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */

        @return void

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
