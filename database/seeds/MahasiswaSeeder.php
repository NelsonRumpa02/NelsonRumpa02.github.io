<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement(['male', 'female']);
        $jurusan = $faker->randomElement(['Dokter', 'Manajemen','Teologi','Arsitektur','Teknik Informatika',
        'Sistem Informasi']);
        $minat = $faker->randomElement(['Basket', 'Futsal','Badminton','Catur','Menyanyi']);
        for($i = 51; $i <= 60; $i++)
        {
        DB::table('mahasiswa')->insert([
            'nim' => $faker->nik(),
            'nama' => $faker->name($gender),
            'gender' => $gender,
            'jurusan' => $jurusan,
            'bidang_minat' => $minat
        ]);
        }
    }
}
