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
        Schema::create('mon_ans', function (Blueprint $table) {
            $table->id();
            $table->string('ten'); // Tên món ăn
            $table->string('vung_mien'); // Vùng miền: Bắc, Trung, Nam
            $table->text('mo_ta')->nullable(); // Mô tả món ăn
            $table->string('hinh_anh')->nullable(); // Đường dẫn hình ảnh
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mon_ans');
    }
};
