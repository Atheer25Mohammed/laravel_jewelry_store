<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJewelriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jewelries', function (Blueprint $table) {
            $table->id(); // العمود الأساسي
            $table->string('name'); // اسم المجوهرات
            $table->text('description'); // وصف المجوهرات
            $table->decimal('price', 8, 2); // السعر (مثال: 9999.99)
            $table->string('image'); // مسار الصورة
            $table->timestamps(); // وقت الإنشاء والتحديث
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jewelries');
    }
}
