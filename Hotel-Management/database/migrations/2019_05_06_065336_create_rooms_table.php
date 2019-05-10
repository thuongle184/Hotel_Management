  <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_size_id')->unsigned();
            $table->string('number')->unique();
            $table->enum('is_smoking', ['yes', 'no']);
            $table->integer('price');
            $table->enum('is_available', ['yes', 'no']);
            $table->integer('beds');
            $table->foreign('room_size_id')->references('id')->on('room_sizes')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
