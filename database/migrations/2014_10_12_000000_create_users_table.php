<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('nid')->unique();
            $table->string('phone_no')->unique();
            $table->bigInteger('role_id')->default(3);
            $table->bigInteger('subrole_id')->unsigned()->index()->default(0);
            $table->foreign('subrole_id')
                ->references('id')->on('subroles')
                ->onDelete('cascade');
            $table->integer('gender_code');
            $table->string('birth_date');
            $table->string('password');
            $table->string('address');
            $table->string('profile_image');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
