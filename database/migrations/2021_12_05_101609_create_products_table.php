<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->foreignId('owner_id')->default(1)->constrained('users')->cascadeOnDelete();
            // $table->foreignId('category_id')->default(1)->constrained('categories')->cascadeOnDelete();
            $table->integer('owner_id');
            $table->integer('category_id');
            $table->text('image');
            $table->longText('contact_info');
            $table->integer('quantity')->default('1');
            $table->float('initial_price');
            $table->date('first_evaluation_date');
            $table->date('second_evaluation_date');
            $table->date('expiration_date');
            $table->float('first_discount_percentage');
            $table->float('second_discount_percentage');
            $table->float('third_discount_percentage');
            $table->integer('range-1');
            $table->integer('range-2');
            $table->integer('range-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
