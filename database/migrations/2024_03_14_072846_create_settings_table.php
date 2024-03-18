<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Website Portofolio',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat',
            'value'=>'Kabupaten Tanah Datar,Sumbar,Indonesia',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://www.instagram.com/delia.julianti?igsh=NXp6eDh3ZDBrbmk3',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_tiktok',
            'label'=>'Tiktok',
            'value'=>'https://www.tiktok.com/@girl_liaaa?_t=8kfJWBVrJM0&_r=1',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_email',
            'label'=>'Email',
            'value'=>'deliajulianti07@gmail.com',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_site_description',
            'label'=>'Site Description',
            'value'=>'Website Sederhana Biodata, dengan admin fillament',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
