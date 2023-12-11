<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'title' => 'Site İsmi',
                'key' => 'site_name',
                'value' => config('app.name'),
            ],
            [
                'title' => 'Sayfa Açıklaması',
                'key' => 'description',
                'value' => config('app.name').' - '.config('app.description'),
            ],
            [
                'title' => 'Anahtar Kelimeler',
                'key' => 'keywords',
                'value' => config('app.name').', '.config('app.keywords'),
            ],
            [
                'title' => 'Telefon Numarası',
                'key' => 'phone',
                'value' => '+90 (216) 123 45 67',
            ],
            [
                'title' => 'E-Posta Adresi',
                'key' => 'email',
                'value' => 'info@'.config('app.name').'.com',
            ],
            [
                'title' => 'Adres',
                'key' => 'address',
                'value' => 'adres',
            ],
        ];

        Setting::insert($settings);
    }
}
