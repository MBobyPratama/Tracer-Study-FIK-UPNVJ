<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'michael',
                'nim' => '2310512056',
                'email' => 'bobyjakarta4@gmail.com',
                'gender' => 'L',
                'no_hp' => '088213037677',
                'alamat' => 'Jl. Pembina no. 1, Kec. Pasar Rebo, Jakarta Timur',
                'no_ktp' => '3175010101010001',
                'tempat_lahir' => 'Jakarta',
                'tgl_lahir' => '2005-02-03',
                'password' => bcrypt('michael123')
            ],
            [
                'name' => 'franklin',
                'nim' => '2310512057',
                'email' => '2310512057@mahasiswa.upnvj.ac.id',
                'gender' => 'P',
                'no_hp' => '088213039009',
                'alamat' => 'Jl. Pertengahan no. 1, Kec. Pasar Rebo, Jakarta Timur',
                'no_ktp' => '3175010101010002',
                'tempat_lahir' => 'Bandung',
                'tgl_lahir' => '2005-10-11',
                'password' => bcrypt('franklin123')
            ],
        ];

        foreach ($user as $key => $val) {
            User::create($val);
        }
    }
}
