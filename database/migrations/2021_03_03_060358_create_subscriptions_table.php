<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateSubscriptionsTable
 */
class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up ()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('hours')->default(0);
            $table->integer('minutes')->default(0);
            $table->string('tag_ids')->default('0')->comment('推送的标签id');
            $table->integer('pushed_time')->default(0)->comment('任务执行日期');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists('subscriptions');
    }
}
