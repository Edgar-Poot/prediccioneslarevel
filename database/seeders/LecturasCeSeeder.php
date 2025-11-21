<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturasCeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['valor' => 1.20, 'fecha' => '2025-01-10', 'hora' => '12:00:00'],
            ['valor' => 1.22, 'fecha' => '2025-01-10', 'hora' => '12:01:00'],
            ['valor' => 1.23, 'fecha' => '2025-01-10', 'hora' => '12:02:00'],
            ['valor' => 1.24, 'fecha' => '2025-01-10', 'hora' => '12:03:00'],
            ['valor' => 1.25, 'fecha' => '2025-01-10', 'hora' => '12:04:00'],
            ['valor' => 1.26, 'fecha' => '2025-01-10', 'hora' => '12:05:00'],
            ['valor' => 1.27, 'fecha' => '2025-01-10', 'hora' => '12:06:00'],
            ['valor' => 1.29, 'fecha' => '2025-01-10', 'hora' => '12:07:00'],
            ['valor' => 1.30, 'fecha' => '2025-01-10', 'hora' => '12:08:00'],
            ['valor' => 1.31, 'fecha' => '2025-01-10', 'hora' => '12:09:00'],
            ['valor' => 1.32, 'fecha' => '2025-01-10', 'hora' => '12:10:00'],
            ['valor' => 1.33, 'fecha' => '2025-01-10', 'hora' => '12:11:00'],
            ['valor' => 1.34, 'fecha' => '2025-01-10', 'hora' => '12:12:00'],
            ['valor' => 1.35, 'fecha' => '2025-01-10', 'hora' => '12:13:00'],
            ['valor' => 1.36, 'fecha' => '2025-01-10', 'hora' => '12:14:00'],
            ['valor' => 1.37, 'fecha' => '2025-01-10', 'hora' => '12:15:00'],
            ['valor' => 1.38, 'fecha' => '2025-01-10', 'hora' => '12:16:00'],
            ['valor' => 1.39, 'fecha' => '2025-01-10', 'hora' => '12:17:00'],
            ['valor' => 1.40, 'fecha' => '2025-01-10', 'hora' => '12:18:00'],
            ['valor' => 1.42, 'fecha' => '2025-01-10', 'hora' => '12:19:00'],
            ['valor' => 1.43, 'fecha' => '2025-01-10', 'hora' => '12:20:00'],
            ['valor' => 1.44, 'fecha' => '2025-01-10', 'hora' => '12:21:00'],
            ['valor' => 1.45, 'fecha' => '2025-01-10', 'hora' => '12:22:00'],
            ['valor' => 1.46, 'fecha' => '2025-01-10', 'hora' => '12:23:00'],
            ['valor' => 1.47, 'fecha' => '2025-01-10', 'hora' => '12:24:00'],
            ['valor' => 1.48, 'fecha' => '2025-01-10', 'hora' => '12:25:00'],
            ['valor' => 1.49, 'fecha' => '2025-01-10', 'hora' => '12:26:00'],
            ['valor' => 1.50, 'fecha' => '2025-01-10', 'hora' => '12:27:00'],
            ['valor' => 1.51, 'fecha' => '2025-01-10', 'hora' => '12:28:00'],
            ['valor' => 1.52, 'fecha' => '2025-01-10', 'hora' => '12:29:00'],
            ['valor' => 1.53, 'fecha' => '2025-01-10', 'hora' => '12:30:00'],
            ['valor' => 1.54, 'fecha' => '2025-01-10', 'hora' => '12:31:00'],
            ['valor' => 1.55, 'fecha' => '2025-01-10', 'hora' => '12:32:00'],
            ['valor' => 1.56, 'fecha' => '2025-01-10', 'hora' => '12:33:00'],
            ['valor' => 1.57, 'fecha' => '2025-01-10', 'hora' => '12:34:00'],
            ['valor' => 1.58, 'fecha' => '2025-01-10', 'hora' => '12:35:00'],
            ['valor' => 1.59, 'fecha' => '2025-01-10', 'hora' => '12:36:00'],
            ['valor' => 1.60, 'fecha' => '2025-01-10', 'hora' => '12:37:00'],
            ['valor' => 1.61, 'fecha' => '2025-01-10', 'hora' => '12:38:00'],
            ['valor' => 1.62, 'fecha' => '2025-01-10', 'hora' => '12:39:00'],
        ];

        foreach ($datos as $d) {
            DB::table('lecturas_ce')->insert([
                'valor' => $d['valor'],
                'fecha' => $d['fecha'],
                'hora'  => $d['hora'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
