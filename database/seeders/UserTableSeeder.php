<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create(
            [
                'name'     => 'admin',
                'email'    => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'is_admin' => 1,
            ]
        );
    }
}
