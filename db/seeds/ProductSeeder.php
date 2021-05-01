<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ProductSeeder extends AbstractSeed
{
    public function getDependencies()
    {
        return [
            'CategorySeeder',
        ];
    }

    public function run()
    {
        $data = [
            [
                'category_id' => 1,
                'name' => 'Teclado',
                'price' => 50.00,
            ],
            [
                'category_id' => 2,
                'name' => 'Mouse',
                'price' => 30.00,
            ],
        ];

        $users = $this->table('products');
        $users->insert($data)
            ->saveData();
    }
}
