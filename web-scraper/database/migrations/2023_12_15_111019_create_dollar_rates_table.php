<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDollarRatesTable extends Migration
{
    public function up()
    {
        Schema::create('dollar_rates', function (Blueprint $table) {
            $table->id();
            $table->string('rate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dollar_rates');
    }
}
