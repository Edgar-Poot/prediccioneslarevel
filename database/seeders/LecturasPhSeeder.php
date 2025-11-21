<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturasPhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['valor' => 6.90, 'fecha' => '2025-01-10', 'hora' => '12:00:00'],
            ['valor' => 6.88, 'fecha' => '2025-01-10', 'hora' => '12:01:00'],
            ['valor' => 6.87, 'fecha' => '2025-01-10', 'hora' => '12:02:00'],
            ['valor' => 6.86, 'fecha' => '2025-01-10', 'hora' => '12:03:00'],
            ['valor' => 6.85, 'fecha' => '2025-01-10', 'hora' => '12:04:00'],
            ['valor' => 6.84, 'fecha' => '2025-01-10', 'hora' => '12:05:00'],
            ['valor' => 6.83, 'fecha' => '2025-01-10', 'hora' => '12:06:00'],
            ['valor' => 6.81, 'fecha' => '2025-01-10', 'hora' => '12:07:00'],
            ['valor' => 6.80, 'fecha' => '2025-01-10', 'hora' => '12:08:00'],
            ['valor' => 6.79, 'fecha' => '2025-01-10', 'hora' => '12:09:00'],
            ['valor' => 6.78, 'fecha' => '2025-01-10', 'hora' => '12:10:00'],
            ['valor' => 6.77, 'fecha' => '2025-01-10', 'hora' => '12:11:00'],
            ['valor' => 6.76, 'fecha' => '2025-01-10', 'hora' => '12:12:00'],
            ['valor' => 6.75, 'fecha' => '2025-01-10', 'hora' => '12:13:00'],
            ['valor' => 6.74, 'fecha' => '2025-01-10', 'hora' => '12:14:00'],
            ['valor' => 6.73, 'fecha' => '2025-01-10', 'hora' => '12:15:00'],
            ['valor' => 6.72, 'fecha' => '2025-01-10', 'hora' => '12:16:00'],
            ['valor' => 6.70, 'fecha' => '2025-01-10', 'hora' => '12:17:00'],
            ['valor' => 6.69, 'fecha' => '2025-01-10', 'hora' => '12:18:00'],
            ['valor' => 6.68, 'fecha' => '2025-01-10', 'hora' => '12:19:00'],
            ['valor' => 6.67, 'fecha' => '2025-01-10', 'hora' => '12:20:00'],
            ['valor' => 6.66, 'fecha' => '2025-01-10', 'hora' => '12:21:00'],
            ['valor' => 6.65, 'fecha' => '2025-01-10', 'hora' => '12:22:00'],
            ['valor' => 6.63, 'fecha' => '2025-01-10', 'hora' => '12:23:00'],
            ['valor' => 6.62, 'fecha' => '2025-01-10', 'hora' => '12:24:00'],
            ['valor' => 6.61, 'fecha' => '2025-01-10', 'hora' => '12:25:00'],
            ['valor' => 6.60, 'fecha' => '2025-01-10', 'hora' => '12:26:00'],
            ['valor' => 6.59, 'fecha' => '2025-01-10', 'hora' => '12:27:00'],
            ['valor' => 6.58, 'fecha' => '2025-01-10', 'hora' => '12:28:00'],
            ['valor' => 6.57, 'fecha' => '2025-01-10', 'hora' => '12:29:00'],
            ['valor' => 6.56, 'fecha' => '2025-01-10', 'hora' => '12:30:00'],
            ['valor' => 6.55, 'fecha' => '2025-01-10', 'hora' => '12:31:00'],
            ['valor' => 6.54, 'fecha' => '2025-01-10', 'hora' => '12:32:00'],
            ['valor' => 6.53, 'fecha' => '2025-01-10', 'hora' => '12:33:00'],
            ['valor' => 6.52, 'fecha' => '2025-01-10', 'hora' => '12:34:00'],
            ['valor' => 6.51, 'fecha' => '2025-01-10', 'hora' => '12:35:00'],
            ['valor' => 6.50, 'fecha' => '2025-01-10', 'hora' => '12:36:00'],
            ['valor' => 6.49, 'fecha' => '2025-01-10', 'hora' => '12:37:00'],
            ['valor' => 6.48, 'fecha' => '2025-01-10', 'hora' => '12:38:00'],
            ['valor' => 6.47, 'fecha' => '2025-01-10', 'hora' => '12:39:00'],
        ];

        foreach ($datos as $d) {
            DB::table('lecturas_ph')->insert([
                'valor' => $d['valor'],
                'fecha' => $d['fecha'],
                'hora'  => $d['hora'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
