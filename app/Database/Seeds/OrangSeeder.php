<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        //$data = [
        //[
        //'nama' => 'Devon Pakilaran',
        //'alamat'    => 'Jln Sudiang No. 243',
        //'created_at' => Time::now(),
        //'updated_at' => Time::now()
        //],
        //[
        //'nama' => 'Derek',
        //'alamat'    => 'Jln Sudiang No. 244',
        //'created_at' => Time::now(),
        //'updated_at' => Time::now()
        //],
        //[
        //'nama' => 'Daniel',
        //'alamat'    => 'Jln Sudiang No. 245',
        //'created_at' => Time::now(),
        //'updated_at' => Time::now()
        //],
        //[
        //'nama' => 'Minato Mio',
        //'alamat'    => 'Jln Osaka No 43',
        //'created_at' => Time::now(),
        //'updated_at' => Time::now()
        //],
        //[
        //'nama' => 'Aine Yuki',
        //'alamat'    => 'Jln Fukuoka No 245',
        ///'created_at' => Time::now(),
        ///'updated_at' => Time::now()
        //],
        //[
        //'nama' => 'Kiriya Aoi',
        //'alamat'    => 'Jln Yaesu No 43',
        //'created_at' => Time::now(),
        //'updated_at' => Time::now()
        //],
        //[
        //'nama' => 'Ichigo Hoshimiya',
        //'alamat'    => 'Jln Yaesu No 43',
        // 'created_at' => Time::now(),
        //'updated_at' => Time::now()
        //]
        //];
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }
        // Simple Queries
        //$this->db->query(
        //"INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //$data
        //);

        // Using Query Builder
        //$this->db->table('orang')->insert($data);
        //$this->db->table('orang')->insertBatch($data);
    }
}
