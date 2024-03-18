<?php

// database/seeders/UserSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Criar 10 usuários comuns
        factory(User::class, 10)->create();

        // Criar um administrador com acesso total
        User::create([
            'name' => 'beemote',
            'email' => 'beemote@admin.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin_total',
        ]);

        // Criar um administrador com acesso parcial
        User::create([
            'name' => 'Admin Parcial',
            'email' => 'adminparcial@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin_parcial',
        ]);
    }
}
