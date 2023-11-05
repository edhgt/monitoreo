<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin User',
            'email' => 'admin@' . env('APP_DOMAIN'),
        ]);

        $this->call([
            TipoMedicionSeeder::class,
            RoleSeeder::class,
        ]);

        $role = \Spatie\Permission\Models\Role::where('name', 'Super Admin')->first();
        $user->assignRole($role);
    }
}
