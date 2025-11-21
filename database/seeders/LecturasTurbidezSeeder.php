<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturasTurbidezSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['valor' => 12, 'fecha' => '2025-01-10', 'hora' => '12:00:00'],
            ['valor' => 13, 'fecha' => '2025-01-10', 'hora' => '12:01:00'],
            ['valor' => 13, 'fecha' => '2025-01-10', 'hora' => '12:02:00'],
            ['valor' => 14, 'fecha' => '2025-01-10', 'hora' => '12:03:00'],
            ['valor' => 14, 'fecha' => '2025-01-10', 'hora' => '12:04:00'],
            ['valor' => 15, 'fecha' => '2025-01-10', 'hora' => '12:05:00'],
            ['valor' => 15, 'fecha' => '2025-01-10', 'hora' => '12:06:00'],
            ['valor' => 16, 'fecha' => '2025-01-10', 'hora' => '12:07:00'],
            ['valor' => 16, 'fecha' => '2025-01-10', 'hora' => '12:08:00'],
            ['valor' => 17, 'fecha' => '2025-01-10', 'hora' => '12:09:00'],
            ['valor' => 17, 'fecha' => '2025-01-10', 'hora' => '12:10:00'],
            ['valor' => 18, 'fecha' => '2025-01-10', 'hora' => '12:11:00'],
            ['valor' => 18, 'fecha' => '2025-01-10', 'hora' => '12:12:00'],
            ['valor' => 19, 'fecha' => '2025-01-10', 'hora' => '12:13:00'],
            ['valor' => 19, 'fecha' => '2025-01-10', 'hora' => '12:14:00'],
            ['valor' => 20, 'fecha' => '2025-01-10', 'hora' => '12:15:00'],
            ['valor' => 20, 'fecha' => '2025-01-10', 'hora' => '12:16:00'],
            ['valor' => 21, 'fecha' => '2025-01-10', 'hora' => '12:17:00'],
            ['valor' => 21, 'fecha' => '2025-01-10', 'hora' => '12:18:00'],
            ['valor' => 22, 'fecha' => '2025-01-10', 'hora' => '12:19:00'],
            ['valor' => 22, 'fecha' => '2025-01-10', 'hora' => '12:20:00'],
            ['valor' => 23, 'fecha' => '2025-01-10', 'hora' => '12:21:00'],
            ['valor' => 23, 'fecha' => '2025-01-10', 'hora' => '12:22:00'],
            ['valor' => 24, 'fecha' => '2025-01-10', 'hora' => '12:23:00'],
            ['valor' => 24, 'fecha' => '2025-01-10', 'hora' => '12:24:00'],
            ['valor' => 25, 'fecha' => '2025-01-10', 'hora' => '12:25:00'],
            ['valor' => 25, 'fecha' => '2025-01-10', 'hora' => '12:26:00'],
            ['valor' => 26, 'fecha' => '2025-01-10', 'hora' => '12:27:00'],
            ['valor' => 26, 'fecha' => '2025-01-10', 'hora' => '12:28:00'],
            ['valor' => 27, 'fecha' => '2025-01-10', 'hora' => '12:29:00'],
            ['valor' => 27, 'fecha' => '2025-01-10', 'hora' => '12:30:00'],
            ['valor' => 28, 'fecha' => '2025-01-10', 'hora' => '12:31:00'],
            ['valor' => 28, 'fecha' => '2025-01-10', 'hora' => '12:32:00'],
            ['valor' => 29, 'fecha' => '2025-01-10', 'hora' => '12:33:00'],
            ['valor' => 29, 'fecha' => '2025-01-10', 'hora' => '12:34:00'],
            ['valor' => 30, 'fecha' => '2025-01-10', 'hora' => '12:35:00'],
            ['valor' => 30, 'fecha' => '2025-01-10', 'hora' => '12:36:00'],
            ['valor' => 31, 'fecha' => '2025-01-10', 'hora' => '12:37:00'],
            ['valor' => 31, 'fecha' => '2025-01-10', 'hora' => '12:38:00'],
            ['valor' => 32, 'fecha' => '2025-01-10', 'hora' => '12:39:00'],
        ];

        foreach ($datos as $d) {
            DB::table('lecturas_turbidez')->insert([
                'valor' => $d['valor'],
                'fecha' => $d['fecha'],
                'hora'  => $d['hora'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
