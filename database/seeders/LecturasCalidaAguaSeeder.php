<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturasCalidaAguaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['valor' => 100.00, 'fecha' => '2025-01-10', 'hora' => '12:00:00'],
            ['valor' => 97.30, 'fecha' => '2025-01-10', 'hora' => '12:01:00'],
            ['valor' => 94.40, 'fecha' => '2025-01-10', 'hora' => '12:02:00'],
            ['valor' => 91.69, 'fecha' => '2025-01-10', 'hora' => '12:03:00'],
            ['valor' => 88.79, 'fecha' => '2025-01-10', 'hora' => '12:04:00'],
            ['valor' => 88.59, 'fecha' => '2025-01-10', 'hora' => '12:05:00'],
            ['valor' => 84.02, 'fecha' => '2025-01-10', 'hora' => '12:06:00'],
            ['valor' => 81.32, 'fecha' => '2025-01-10', 'hora' => '12:07:00'],
            ['valor' => 78.42, 'fecha' => '2025-01-10', 'hora' => '12:08:00'],
            ['valor' => 75.72, 'fecha' => '2025-01-10', 'hora' => '12:09:00'],
            ['valor' => 72.82, 'fecha' => '2025-01-10', 'hora' => '12:10:00'],
            ['valor' => 70.11, 'fecha' => '2025-01-10', 'hora' => '12:11:00'],
            ['valor' => 67.21, 'fecha' => '2025-01-10', 'hora' => '12:12:00'],
            ['valor' => 64.51, 'fecha' => '2025-01-10', 'hora' => '12:13:00'],
            ['valor' => 62.11, 'fecha' => '2025-01-10', 'hora' => '12:14:00'],
            ['valor' => 59.74, 'fecha' => '2025-01-10', 'hora' => '12:15:00'],
            ['valor' => 56.84, 'fecha' => '2025-01-10', 'hora' => '12:16:00'],
            ['valor' => 54.64, 'fecha' => '2025-01-10', 'hora' => '12:17:00'],
            ['valor' => 52.07, 'fecha' => '2025-01-10', 'hora' => '12:18:00'],
            ['valor' => 49.37, 'fecha' => '2025-01-10', 'hora' => '12:19:00'],
            ['valor' => 46.97, 'fecha' => '2025-01-10', 'hora' => '12:20:00'],
            ['valor' => 44.60, 'fecha' => '2025-01-10', 'hora' => '12:21:00'],
            ['valor' => 41.70, 'fecha' => '2025-01-10', 'hora' => '12:22:00'],
            ['valor' => 39.49, 'fecha' => '2025-01-10', 'hora' => '12:23:00'],
            ['valor' => 36.93, 'fecha' => '2025-01-10', 'hora' => '12:24:00'],
            ['valor' => 34.22, 'fecha' => '2025-01-10', 'hora' => '12:25:00'],
            ['valor' => 31.82, 'fecha' => '2025-01-10', 'hora' => '12:26:00'],
            ['valor' => 29.45, 'fecha' => '2025-01-10', 'hora' => '12:27:00'],
            ['valor' => 26.55, 'fecha' => '2025-01-10', 'hora' => '12:28:00'],
            ['valor' => 24.35, 'fecha' => '2025-01-10', 'hora' => '12:29:00'],
            ['valor' => 21.78, 'fecha' => '2025-01-10', 'hora' => '12:30:00'],
            ['valor' => 19.08, 'fecha' => '2025-01-10', 'hora' => '12:31:00'],
            ['valor' => 16.68, 'fecha' => '2025-01-10', 'hora' => '12:32:00'],
            ['valor' => 14.31, 'fecha' => '2025-01-10', 'hora' => '12:33:00'],
            ['valor' => 11.91, 'fecha' => '2025-01-10', 'hora' => '12:34:00'],
            ['valor' => 9.54, 'fecha' => '2025-01-10', 'hora' => '12:35:00'],
            ['valor' => 7.14, 'fecha' => '2025-01-10', 'hora' => '12:36:00'],
            ['valor' => 4.77, 'fecha' => '2025-01-10', 'hora' => '12:37:00'],
            ['valor' => 2.37, 'fecha' => '2025-01-10', 'hora' => '12:38:00'],
            ['valor' => 0.00, 'fecha' => '2025-01-10', 'hora' => '12:39:00'],
        ];


        foreach ($datos as $d) {
            DB::table('lecturas_calidad_agua')->insert([
                'valor' => $d['valor'],
                'fecha' => $d['fecha'],
                'hora'  => $d['hora'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
