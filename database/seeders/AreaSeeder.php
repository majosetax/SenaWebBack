<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this ->saveArea('tics','2');
        $this ->saveArea('otros','3');
    }

    private function saveArea(string $nombreArea, string $codigo)
    {
        $area = new Area();
        $area->nombreArea = $nombreArea;
        $area->codigo= $codigo;
        $area->save();
    }
}
