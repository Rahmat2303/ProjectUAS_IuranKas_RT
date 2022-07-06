<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {        
        $model = model('UserModel');
        $model->insert([
        'username' => 'rahmat',
        'useremail' => 'rahmat@gmail.com',
        'userpassword' => password_hash('rahmat123', PASSWORD_DEFAULT),
        ]);
    }
}
