<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    final public function run(): void
    {
        for ($level0 = 1; $level0 <= 3; $level0++) {
            $level0Category = Category::create(['name' => 'category ' . $level0]);
            for ($level1 = 1; $level1 <= 3; $level1++) {
                $level1Category = Category::create(['category_id' => $level0Category->id, 'name' => 'category ' . $level0 . '.' . $level1]);
                for ($level2 = 1; $level2 <= 3; $level2++) {
                    Category::create(['category_id' => $level1Category->id, 'name' => 'category ' . $level0 . '.' . $level1 . '.' . $level2]);
                }
            }
        }
    }
}
