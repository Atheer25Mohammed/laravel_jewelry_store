<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // العمود الأساسي
            $table->string('name'); // اسم العميل
            $table->string('email')->unique(); // البريد الإلكتروني مع فحص فريد
            $table->string('phone'); // رقم الهاتف
            $table->text('address')->nullable(); // العنوان (يجب أن يكون قابلًا للفراغ)
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
        Schema::dropIfExists('customers');
    }
}
