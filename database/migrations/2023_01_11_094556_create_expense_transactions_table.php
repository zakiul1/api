<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('expenses_head_id')->unsigned();
            $table->foreign('expenses_head_id')->references('id')->on('expense_heads')->onDelete('cascade');
            $table->text('expense_description');
            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->bigInteger('employ_id')->unsigned();
            $table->foreign('employ_id')->references('id')->on('employees')->onDelete('cascade');
            $table->float('amount', 12, 2);
            $table->date('date')->nullable();
            $table->string('voucher')->nullable();
            $table->string('reference')->nullable();
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
        Schema::dropIfExists('expense_transactions');
    }
};
