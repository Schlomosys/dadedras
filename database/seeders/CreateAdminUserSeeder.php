<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//use Overtrue\LaravelFollow\Models\CanFollow;
//use Overtrue\LaravelFollow\Models\CanBeFollowed;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'firstname' => 'Issognima', 
            'lastname' => 'Awolou', 
            'pays'=>'Benin',
            'pseudo'=>"8f256675-452d-45e1-b667-524d1731f332",
            'numTel'=>'45456452455',
            'email' => 'igotabroad@gmail.com',
            'password' => bcrypt('schallom'),
            'provider_id'   => "DFGJHKMKIHJB",
            'provider'      => "dad_dedras",
            'visibility_id'=>1,
        ]);
    
        $role = Role::create(['name' => 'SuperAdminA']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}