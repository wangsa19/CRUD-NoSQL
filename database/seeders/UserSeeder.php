<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1985-06-15',
                'no_telp' => '081234567890',
                'address' => '123 Main St, Jakarta'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Perempuan',
                'tgl_lahir' => '1990-07-25',
                'no_telp' => '081234567891',
                'address' => '456 Elm St, Surabaya'
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael.johnson@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1988-05-12',
                'no_telp' => '081234567892',
                'address' => '789 Oak St, Bandung'
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Perempuan',
                'tgl_lahir' => '1992-11-05',
                'no_telp' => '081234567893',
                'address' => '321 Pine St, Medan'
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1980-03-30',
                'no_telp' => '081234567894',
                'address' => '654 Maple St, Semarang'
            ],
            [
                'name' => 'Sarah Brown',
                'email' => 'sarah.brown@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Perempuan',
                'tgl_lahir' => '1995-09-10',
                'no_telp' => '081234567895',
                'address' => '987 Cedar St, Yogyakarta'
            ],
            [
                'name' => 'Chris Miller',
                'email' => 'chris.miller@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1983-01-20',
                'no_telp' => '081234567896',
                'address' => '123 Birch St, Makassar'
            ],
            [
                'name' => 'Anna Garcia',
                'email' => 'anna.garcia@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Perempuan',
                'tgl_lahir' => '1991-04-18',
                'no_telp' => '081234567897',
                'address' => '456 Walnut St, Malang'
            ],
            [
                'name' => 'James Martinez',
                'email' => 'james.martinez@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Laki-laki',
                'tgl_lahir' => '1986-08-25',
                'no_telp' => '081234567898',
                'address' => '789 Chestnut St, Palembang'
            ],
            [
                'name' => 'Karen White',
                'email' => 'karen.white@example.com',
                'password' => Hash::make('password'),
                'gender' => 'Perempuan',
                'tgl_lahir' => '1989-12-15',
                'no_telp' => '081234567899',
                'address' => '321 Spruce St, Denpasar'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
