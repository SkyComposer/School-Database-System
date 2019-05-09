<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allstudents', function (Blueprint $table) {

             // Personal Details 
             $table->increments('id');
             $table->string('f_name', 50);
             $table->string('m_name', 50);
             $table->string('l_name', 50);
             $table->string('gender', 10);
             $table->string('cover_image');
             $table->integer('roll_no');
             $table->date('dob');
             $table->string('class', 7);
             $table->string('blood_group', 20);
             $table->string('birth_place');
             $table->string('nationality', 20);
             $table->string('mother_tongue', 20);
             // Contact 
             $table->string('permanent_address');
             $table->string('permanent_city');
             $table->string('permanent_state');
             $table->string('permanent_zip', 20);
             $table->string('permanent_country', 40);
             $table->string('permanent_phone', 20);
             $table->string('present_address');
             $table->string('present_city');
             $table->string('present_state');
             $table->string('present_zip', 20);
             $table->string('present_country', 40);
             $table->string('present_phone', 20);
             // Relationships
             $table->string('father_name', 50);
             $table->string('father_profession', 50);
             $table->string('father_national_id_card_type', 30);
             $table->string('father_national_id_card_number', 30);
             $table->string('father_mobile_number', 20);
 
             $table->string('mother_name', 50);
             $table->string('mother_profession', 50);
             $table->string('mother_national_id_card_type', 30);
             $table->string('mother_national_id_card_number', 30);
             $table->string('mother_mobile_number', 20);
 
             $table->string('guardian_name', 50);
             $table->string('guardian_profession', 50);
             $table->string('guardian_national_id_card_type', 50);
             $table->string('guardian_national_id_card_number', 50);
             $table->string('guardian_mobile_number', 50);
             $table ->integer('user_id');
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
        Schema::dropIfExists('allstudents');
    }
}
