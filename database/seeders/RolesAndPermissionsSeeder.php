<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
          // Create roles
          $adminRole = Role::create(['name' => 'admin']);
          $socialRole = Role::create(['name' => 'social']);
          $bodegaRole = Role::create(['name' => 'bodega']);
          $viviendaRole  = Role::create(['name' => 'vivienda']);
  
          /* Create permissions
          $createPostPermission = Permission::create(['name' => 'create post']);
          $editPostPermission = Permission::create(['name' => 'edit post']);
          $deletePostPermission = Permission::create(['name' => 'delete post']);
  
          // Assign permissions to roles
          $adminRole->givePermissionTo($createPostPermission);
          $adminRole->givePermissionTo($editPostPermission);
          $adminRole->givePermissionTo($deletePostPermission);
  
          $editorRole->givePermissionTo($createPostPermission);
          $editorRole->givePermissionTo($editPostPermission);
  
          $userRole->givePermissionTo($createPostPermission)*/
    }
}
