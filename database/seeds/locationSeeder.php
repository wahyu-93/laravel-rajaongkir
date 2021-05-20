<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\City;

class locationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftarProvinsi = RajaOngkir::provinsi()->all();
        foreach($daftarProvinsi as $provinsiRow){
            Province::create([
                'province_id'   => $provinsiRow['province_id'],
                'name'          => $provinsiRow['province']
            ]);

            $daftarKota = RajaOngkir::kota()->dariProvinsi($provinsiRow['province_id'])->get();
            foreach($daftarKota as $cityRow){
                City::create([
                    'province_id'   => $provinsiRow['province_id'],
                    'city_id'       => $cityRow['city_id'],
                    'name'          => $cityRow['city_name'],
                ]);
            }
        }
    }
}
