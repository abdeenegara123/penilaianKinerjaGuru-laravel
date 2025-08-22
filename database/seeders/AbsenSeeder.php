<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // daftar user dan keterangannya
        $users = [
            1 => "Mas'ah",
            2 => "Indahyani Tawakkal",
            3 => "Risky Inesa",
            4 => "Mulyati",
            5 => "Riska",
            6 => "Muh. Musyawwir",
            7 => "St. Nurhalisa, S.Pd",
            8 => "Sri Sundari Rasyid",
            9 => "Arifuddin",
            10 => "Savira D. Salsabella",
            11 => "Nur Fadilah Putri",
        ];

        // jumlah agenda (karena di contoh ada sampai agenda_id = 5)
        $agendaCount = 5;

        $data = [];

        for ($agenda = 1; $agenda <= $agendaCount; $agenda++) {
            foreach ($users as $userId => $keterangan) {
                $data[] = [
                    'agenda_id' => $agenda,
                    'user_id' => $userId,
                    'status' => 'hadir',
                    'keterangan' => $keterangan,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
            }
        }

        DB::table('absensis')->insert($data);
    }
}
