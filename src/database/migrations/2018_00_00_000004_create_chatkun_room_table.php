<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateChatkunRoomTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create("chatkun_rooms", function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->string("name");
            $table->string("room_type")->index();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop("chatkun_rooms");
    }
}