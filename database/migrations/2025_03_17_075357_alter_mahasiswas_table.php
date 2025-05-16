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
        Schema::table('mahasiswas', function (Blueprint $table) {
            //
            $table->renameColumn('nim', 'nobp');
            $table->string('alamat')->nullable();
            $table->dropColumn('tgl_lahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            //
            $table->renameColumn('nobp', 'nim');
            $table->dropColumn('alamat');
            $table->date('tgl_lahir')->nullable()-> after('email');
        });
    }
};
