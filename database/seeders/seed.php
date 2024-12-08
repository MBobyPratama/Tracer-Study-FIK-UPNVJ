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
            'foto' => 'https://i.imgur.com/EhqsosX.jpeg',
            'password' => bcrypt('michael123')
        ],
        [
            'name' => 'yoga',
            'nim' => '2310512053',
            'email' => 'yogaramasahdan@gmail.com',
            'gender' => 'L',
            'no_hp' => '081201010101',
            'alamat' => 'Jl. B, Ke. Kebon Jeruk, Jakarta Barat',
            'no_ktp' => '3173010101010001',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2004-07-07',
            'foto' => 'https://i.imgur.com/EhqsosX.jpeg',
            'password' => bcrypt('yoga123')
        ],
        [
            'name' => 'anabel',
            'nim' => '2310512083',
            'email' => 'abelevrilya04@gmail.com',
            'gender' => 'P',
            'no_hp' => '081204040404',
            'alamat' => 'Jl. Pelangi, Citayem, Jawa Barat',
            'no_ktp' => '3173040404040004',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2004-04-04',
            'foto' => 'https://i.imgur.com/EhqsosX.jpeg',
            'password' => bcrypt('abell444')
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
            'foto' => 'https://i.imgur.com/2UL9mtC.jpeg',
            'password' => bcrypt('franklin123')
        ],
    ];

    foreach ($user as $key => $val) {
        // Download the image
        $imageContent = file_get_contents($val['foto']);
        $imageName = basename($val['foto']);
        $imagePath = public_path('images/' . $imageName);

        // Save the image to the public/images directory
        file_put_contents($imagePath, $imageContent);

        // Update the 'foto' path to the local path
        $val['foto'] = 'images/' . $imageName;

        // Create the user
        User::create($val);
    }
}
}
