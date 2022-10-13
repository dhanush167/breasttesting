<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list bookingsettings']);
        Permission::create(['name' => 'view bookingsettings']);
        Permission::create(['name' => 'create bookingsettings']);
        Permission::create(['name' => 'update bookingsettings']);
        Permission::create(['name' => 'delete bookingsettings']);

        Permission::create(['name' => 'list cancertypes']);
        Permission::create(['name' => 'view cancertypes']);
        Permission::create(['name' => 'create cancertypes']);
        Permission::create(['name' => 'update cancertypes']);
        Permission::create(['name' => 'delete cancertypes']);

        Permission::create(['name' => 'list checklists']);
        Permission::create(['name' => 'view checklists']);
        Permission::create(['name' => 'create checklists']);
        Permission::create(['name' => 'update checklists']);
        Permission::create(['name' => 'delete checklists']);

        Permission::create(['name' => 'list commonproblems']);
        Permission::create(['name' => 'view commonproblems']);
        Permission::create(['name' => 'create commonproblems']);
        Permission::create(['name' => 'update commonproblems']);
        Permission::create(['name' => 'delete commonproblems']);

        Permission::create(['name' => 'list examinationfactors']);
        Permission::create(['name' => 'view examinationfactors']);
        Permission::create(['name' => 'create examinationfactors']);
        Permission::create(['name' => 'update examinationfactors']);
        Permission::create(['name' => 'delete examinationfactors']);

        Permission::create(['name' => 'list familyhistories']);
        Permission::create(['name' => 'view familyhistories']);
        Permission::create(['name' => 'create familyhistories']);
        Permission::create(['name' => 'update familyhistories']);
        Permission::create(['name' => 'delete familyhistories']);

        Permission::create(['name' => 'list followupreasons']);
        Permission::create(['name' => 'view followupreasons']);
        Permission::create(['name' => 'create followupreasons']);
        Permission::create(['name' => 'update followupreasons']);
        Permission::create(['name' => 'delete followupreasons']);

        Permission::create(['name' => 'list locations']);
        Permission::create(['name' => 'view locations']);
        Permission::create(['name' => 'create locations']);
        Permission::create(['name' => 'update locations']);
        Permission::create(['name' => 'delete locations']);

        Permission::create(['name' => 'list patienfollowups']);
        Permission::create(['name' => 'view patienfollowups']);
        Permission::create(['name' => 'create patienfollowups']);
        Permission::create(['name' => 'update patienfollowups']);
        Permission::create(['name' => 'delete patienfollowups']);

        Permission::create(['name' => 'list patients']);
        Permission::create(['name' => 'view patients']);
        Permission::create(['name' => 'create patients']);
        Permission::create(['name' => 'update patients']);
        Permission::create(['name' => 'delete patients']);

        Permission::create(['name' => 'list patientbookings']);
        Permission::create(['name' => 'view patientbookings']);
        Permission::create(['name' => 'create patientbookings']);
        Permission::create(['name' => 'update patientbookings']);
        Permission::create(['name' => 'delete patientbookings']);

        Permission::create(['name' => 'list patientexaminations']);
        Permission::create(['name' => 'view patientexaminations']);
        Permission::create(['name' => 'create patientexaminations']);
        Permission::create(['name' => 'update patientexaminations']);
        Permission::create(['name' => 'delete patientexaminations']);

        Permission::create(['name' => 'list patientinvestigations']);
        Permission::create(['name' => 'view patientinvestigations']);
        Permission::create(['name' => 'create patientinvestigations']);
        Permission::create(['name' => 'update patientinvestigations']);
        Permission::create(['name' => 'delete patientinvestigations']);

        Permission::create(['name' => 'list patientmanagmentplans']);
        Permission::create(['name' => 'view patientmanagmentplans']);
        Permission::create(['name' => 'create patientmanagmentplans']);
        Permission::create(['name' => 'update patientmanagmentplans']);
        Permission::create(['name' => 'delete patientmanagmentplans']);

        Permission::create(['name' => 'list patientproblems']);
        Permission::create(['name' => 'view patientproblems']);
        Permission::create(['name' => 'create patientproblems']);
        Permission::create(['name' => 'update patientproblems']);
        Permission::create(['name' => 'delete patientproblems']);

        Permission::create(['name' => 'list patientriskfactors']);
        Permission::create(['name' => 'view patientriskfactors']);
        Permission::create(['name' => 'create patientriskfactors']);
        Permission::create(['name' => 'update patientriskfactors']);
        Permission::create(['name' => 'delete patientriskfactors']);

        Permission::create(['name' => 'list patientultrasoundscans']);
        Permission::create(['name' => 'view patientultrasoundscans']);
        Permission::create(['name' => 'create patientultrasoundscans']);
        Permission::create(['name' => 'update patientultrasoundscans']);
        Permission::create(['name' => 'delete patientultrasoundscans']);

        Permission::create(['name' => 'list ultrasoundscanfactors']);
        Permission::create(['name' => 'view ultrasoundscanfactors']);
        Permission::create(['name' => 'create ultrasoundscanfactors']);
        Permission::create(['name' => 'update ultrasoundscanfactors']);
        Permission::create(['name' => 'delete ultrasoundscanfactors']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
