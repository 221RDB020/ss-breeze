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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            // Ad content
            $table->json('images')->nullable();
            $table->text('ad_text')->nullable();
            $table->string('employer_status')->nullable();
            $table->string('likely_education')->nullable();
            $table->string('education_program')->nullable();
            $table->json('language_skills')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('work_schedule')->nullable();
            $table->json('working_days')->nullable();
            $table->integer('work_experience')->nullable();
            $table->integer('age')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('pvn')->nullable();
            $table->integer('deal_type')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->float('engine_capacity')->nullable();
            $table->integer('engine_type')->nullable();
            $table->integer('car_mileage')->nullable();
            $table->integer('car_body_type')->nullable();
            $table->integer('car_manufacturing_year')->nullable();
            $table->integer('car_gearbox')->nullable();
            $table->integer('gear_count')->nullable();
            $table->string('colour')->nullable();
            $table->boolean('colour_metallic')->nullable();
            $table->string('technical_inspection')->nullable();
            $table->string('vin')->nullable();
            $table->string('number_plate')->nullable();
            $table->json('vehicle_options')->nullable();
            $table->boolean('new_car_bought_in_latvia')->nullable();
            $table->integer('room_count')->nullable();
            $table->integer('area')->nullable();
            $table->integer('building_series')->nullable();
            $table->integer('building_type')->nullable();
            $table->string('castrate_number')->nullable();
            $table->integer('floor')->nullable();
            $table->integer('max_floor')->nullable();
            $table->boolean('elevator')->nullable();
            $table->json('convenience_options')->nullable();
            // Contact
            $table->integer('phone')->nullable();
            $table->integer('second_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('www')->nullable();
            $table->integer('pdf_file_id')->nullable();
            // Location
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('place_of_living')->nullable();
            // Ad misc
            $table->date('ending_date')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->boolean('status')->default(true);

            $table->index('category_id', 'ad_category_idx');
            $table->foreign('category_id', 'ad_category_fk')->on('categories')->references('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
