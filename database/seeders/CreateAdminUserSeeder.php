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
            'firstname' => 'Issognina Schallom', 
            'lastname' => 'Awolou', 
            'pays'=>'Benin',
            'numTel'=>'0224656',
            'email' => 'sharzen76@gmail.com',
            'password' => bcrypt('schallom'),
            'provider_id'   => "ADWSVSNJHJWKSIW",
            'provider'      => "dad_dedras",
            'visibility_id'=>1,
        ]);
    
        $role = Role::create(['name' => 'Admin2']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}