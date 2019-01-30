<?php

use Illuminate\Database\Seeder;

class TransactionOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\TransactionOut::class, 50)->create();
    }
}
