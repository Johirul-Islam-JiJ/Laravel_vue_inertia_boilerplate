<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        Settings::create([
            'name' => 'Buyonia Limited',
            'email' => 'noreply@buyoniasoft.com',
            'phone' => '0123456789',
            'address' => '221B, Baker Street, London',
            'copyright' => 'Copyright © 2022 Buyonia Limited. All Rights Reserved.'
        ]);
    }
}
