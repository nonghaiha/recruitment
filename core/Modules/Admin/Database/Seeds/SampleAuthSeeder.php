<?php
namespace Core\Modules\Admin\Database\Seeds;

use Core\Modules\Admin\Models\Permission;
use Core\Modules\Admin\Models\Role;
use Core\Modules\Admin\Models\User;
use Illuminate\Database\Seeder;

class SampleAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Auth 
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Administrator'
            ],
            [
                'name' => 'user',
                'display_name' => 'Normal User',
                'description' => 'Normal User'
            ]
        ];

        $permissions = [
            [
                'name' => 'user',
                'display_name' => 'normal user',
                'description' => ''
            ]
        ];


        $users = [
            [
                'name' => 'Recruitment Administrator',
                'email' => 'admin@recruitment.com',
                'password' => bcrypt('00000000'),
                'is_admin' => 1
            ],
            [
                'name' => 'Normal User',
                'email' => 'normal@recruitment.com',
                'password' => bcrypt('00000000'),
                'is_admin' => 0
            ]
        ];
        
        foreach ($roles as $k => $role) {
            $newRole = Role::create($role);

            if (array_key_exists($k, $permissions)) {
                $newPermission = Permission::create($permissions[$k]);
                $newRole->attachPermission($newPermission);
            }

            if (array_key_exists($k, $users)) {
                $newUser = User::create($users[$k]);
                $newUser->attachRole($newRole);
            }

            if ($role['name'] == 'admin') {
                $newUser = User::create([
                    'name' => 'CMS Administrator',
                    'email' => 'nonghaiha@caerux.com',
                    'password' => bcrypt('00000000'),
                    'is_admin' => 1
                ]);
                $newUser->attachRole($newRole);
            }
        }

    }
}
