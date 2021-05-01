<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['name' => 'Cat01'],
            ['name' => 'Cat02'],
            ['name' => 'Cat03'],
        ];

        $users = $this->table('categories');
        $users->insert($data)
            ->saveData();
    }
}
