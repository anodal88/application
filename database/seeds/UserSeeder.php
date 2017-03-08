<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create100();
        $this->crudPermmisions();

        $admin_role= new Role();
        $admin_role->name="admin";
        $admin_role->display_name="Administrator";
        $admin_role->description="Master user";
        $admin_role->save();

        $owner_role= new Role();
        $owner_role->name="owner";
        $owner_role->display_name="Owner";
        $owner_role->description="Property owner";
        $owner_role->save();

        $guest_role= new Role();
        $guest_role->name="tenant";
        $guest_role->display_name="Tenant";
        $guest_role->description="Tenant user";
        $guest_role->save();

        $admin = new User();
        $admin->email="admin@admin.com";
        $admin->username="admin@admin.com";
        $admin->name = "Administrator";
        $admin->avatar = "noavatar.png";
        $admin->active = true;
        $admin->api_token = str_random(60);
        $admin->password=\Hash::make('administrator');
        $admin->save();

        $owner = new User();
        $owner->email="owner@owner.com";
        $owner->username="owner@owner.com";
        $owner->name = "Property Owner";
        $owner->avatar = "noavatar.png";
        $owner->active = true;
        $owner->api_token = str_random(60);
        $owner->password=\Hash::make('arrendatario');
        $owner->save();

        $guest = new User();
        $guest->email="tenant@tenant.com";
        $guest->username="tenant@tenant.com";
        $guest->name = "Tenant";
        $guest->avatar = "noavatar.png";
        $guest->active = true;
        $guest->api_token = str_random(60);
        $guest->password=\Hash::make('tenant');
        $guest->save();

        /*Role relationship*/
        $admin->attachRole($admin_role);
        $owner->attachRole($owner_role);
        $guest->attachRole($guest_role);

    }

    public function crudPermmisions(){

        $createRol = new Permission();
        $createRol->name = 'create_rol';
        $createRol->display_name = 'Create Rol';
        $createRol->description = 'create new Rol';
        $createRol->save();

        $editRol = new Permission();
        $editRol->name = 'edit_rol';
        $editRol->display_name = 'Edit Rol';
        $editRol->description = 'Edit Rol';
        $editRol->save();

        $deleteRol = new Permission();
        $deleteRol->name = 'delete_rol';
        $deleteRol->display_name = 'Delete Rol';
        $deleteRol->description = 'Delete new Rol';
        $deleteRol->save();

        $createUser = new Permission();
        $createUser->name = 'create_user';
        $createUser->display_name = 'Create User';
        $createUser->description = 'create new User';
        $createUser->save();

        $editUser = new Permission();
        $editUser->name = 'edit_user';
        $editUser->display_name = 'Edit User';
        $editUser->description = 'Edit User';
        $editUser->save();

        $deleteUser = new Permission();
        $deleteUser->name = 'delete_user';
        $deleteUser->display_name = 'Delete User';
        $deleteUser->description = 'Delete new User';
        $deleteUser->save();

        $createPermission = new Permission();
        $createPermission->name = 'create_permission';
        $createPermission->display_name = 'Create Permission';
        $createPermission->description = 'create new Permission';
        $createPermission->save();

        $editPermission = new Permission();
        $editPermission->name = 'edit_permission';
        $editPermission->display_name = 'Edit Permission';
        $editPermission->description = 'Edit Permission';
        $editPermission->save();

        $deletePermission = new Permission();
        $deletePermission->name = 'delete_permission';
        $deletePermission->display_name = 'Delete Permission';
        $deletePermission->description = 'Delete new Permission';
        $deletePermission->save();
    }
    public function create100(){
        factory(App\User::class, 100)->create();
    }
}
