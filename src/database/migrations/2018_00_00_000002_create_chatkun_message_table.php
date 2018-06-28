<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateChatkunMessageTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create("chatkun_messages", function (Blueprint $table) {

            $table->increments('id');
            $table->string('chat_type')->index();
            $table->unsignedInteger('user_id')->index();
            $table->integer("to_user_id")->index();
            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop("chatkun_messages");
    }
}