<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Member;
use App\Models\Contact;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Category;
use App\Models\CstmInvc;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Member::factory(15)->create();


        Contact::create([
            'name' => 'Customer',
            'role' => 'customer'
        ]);
        Contact::create([
            'name' => 'Supplier',
            'role' => 'suplier'
        ]);

        Product::factory(30)->create();

        Category::factory(3)->create();

        Order::create([
            'name' => 'Costomer Invoince'
        ]);
        Order::create([
            'name' => 'Supplier Bill'
        ]);

        CstmInvc::factory(20)->create();

        Payment::factory(20)->create();

        Inventory::create([
            'name' => 'valution'
        ]);
        Inventory::create([
            'name' => 'product'
        ]);
    }
}
