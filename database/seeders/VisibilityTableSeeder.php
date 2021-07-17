<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visibility;

class VisibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departements =Visibility::create([
            'name' => 'PUBLIC', 
            'slug' => 'public_accreditation', 
            ]);
    
    }
}
