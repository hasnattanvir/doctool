<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('type_of_disease');
            $table->decimal('payment', 10, 2)->default(0.00);
            $table->decimal('due_payment', 10, 2)->default(0.00)->nullable();
            $table->decimal('total_payment', 10, 2)->default(0.00);
            $table->decimal('doctor_fee', 10, 2)->default(0.00);
            $table->text('case_details')->nullable();
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();
            $table->date('next_schedule_date')->nullable();
            $table->string('doctor_name');
            $table->timestamps();

            // Add the soft deletes column
            $table->softDeletes();  // Adds a deleted_at column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
