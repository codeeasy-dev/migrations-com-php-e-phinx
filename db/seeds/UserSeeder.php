<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@mail.com',
                'password' => password_hash('john123', PASSWORD_ARGON2I),
            ]
        ];

        $users = $this->table('users');
        $users->insert($data)
            ->saveData();
    }
}
