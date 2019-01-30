<?php

use Illuminate\Database\Seeder;

class TransactionInSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\TransactionIn::class, 50)->create();
    }
}
