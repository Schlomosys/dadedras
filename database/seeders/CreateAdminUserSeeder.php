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
            'firstname' => ' Schallom', 
            'lastname' => 'Awolou', 
            'pays'=>'Benin',
            'pseudo'=>"a257f8bd-0da0-4256-9ffe-e6807dfb8746",
            'numTel'=>'165653656',
            'email' => 'schal97.aw@gmail.com',
            'password' => bcrypt('schallom'),
            'provider_id'   => "QSMKSKLXKSLSL",
            'provider'      => "dad_dedras",
            'visibility_id'=>1,
        ]);
    
        $role = Role::create(['name' => 'Admin2']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}