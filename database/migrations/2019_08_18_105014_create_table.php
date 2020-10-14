<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname', 45);
            $table->string('email', 45);
            $table->string('address', 45);
            $table->string('birth_date', 45);
            $table->timestamps();
        });

        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_name', 15);
            $table->decimal('price', 10,0);
            $table->timestamps();
        });

        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_name', 255);
            $table->string('region', 45);
            $table->string('address', 255);
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('activations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('msisdn', 15);
            $table->unsignedinteger('subscribers_id');
            $table->unsignedinteger('plans_id');
            $table->integer('periode');
            $table->unsignedinteger('stores_id');
            $table->string('agent_name', 45);
            $table->string('agent_email', 45);
            $table->integer('status');
            $table->timestamps();
            $table->foreign('subscribers_id')->references('id')->on('subscribers')->onDelete('cascade');
            $table->foreign('plans_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('stores_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activations');
        Schema::dropIfExists('subscribers');
        Schema::dropIfExists('plans');
        Schema::dropIfExists('stores');
    }
}