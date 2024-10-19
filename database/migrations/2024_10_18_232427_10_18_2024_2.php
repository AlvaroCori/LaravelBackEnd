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
        Schema::create("cart", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("nit");
            $table->string("client_name");
            $table->dateTime("invoice_date");
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create("item", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("brand");
            $table->integer("price");
            $table->integer("code");
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create("cart_item", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->foreignIdFor(\App\Models\Cart::class);
            $table->foreignIdFor(\App\Models\Item::class);
            $table->string("code_cart_item");
            $table->dateTime("register_date");
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("item");
        Schema::dropIfExists("cart");
        Schema::dropIfExists("cart_item");
        //
    }
};
