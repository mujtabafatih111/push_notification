<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('sub_categories')->truncate();
        DB::table('brands')->truncate();
        DB::table('products')->truncate();

    \App\Models\Category::create([
        'name'=>'shirts',
        'slug'=>'shirts',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'caps',
        'slug'=>'caps',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'clothes',
        'slug'=>'clothes',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'watches',
        'slug'=>'watches',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'glassess',
        'slug'=>'glassess',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'pants',
        'slug'=>'pants',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'laptop',
        'slug'=>'towal',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'laptop',
        'slug'=>'laptop',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'mouse',
        'slug'=>'mouse',
        'status'=>rand(0,1),
    ]);
    \App\Models\Category::create([
        'name'=>'keyboard',
        'slug'=>'keyboard',
        'status'=>rand(0,1),
    ]);

    \App\Models\Brand::create([
        'name'=>'shirts',
        'slug'=>'shirts',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'caps',
        'slug'=>'caps',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'clothes',
        'slug'=>'clothes',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'watches',
        'slug'=>'watches',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'glassess',
        'slug'=>'glassess',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'pants',
        'slug'=>'pants',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'laptop',
        'slug'=>'towal',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'laptop',
        'slug'=>'laptop',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'mouse',
        'slug'=>'mouse',
        'status'=>rand(0,1),
    ]);
    \App\Models\Brand::create([
        'name'=>'keyboard',
        'slug'=>'keyboard',
        'status'=>rand(0,1),
    ]);

    \App\Models\SubCategory::create([
        'name'=>'pants',
        'slug'=>'pants',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'caps',
        'slug'=>'caps',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'caps',
        'slug'=>'caps',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'clothes',
        'slug'=>'clothes',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'watches',
        'slug'=>'watches',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'glassess',
        'slug'=>'glassess',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'desktop',
        'slug'=>'desktop',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'monitor',
        'slug'=>'monitor',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'screen',
        'slug'=>'screen',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);
    \App\Models\SubCategory::create([
        'name'=>'note 12 infinix',
        'slug'=>'note 12 infinix',
        'status'=>rand(0,1),
        'category_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'smart phone',
        'description'=>'this is my new note 12 infinix',
        'price'=>2341,
        'oprice'=>4343,
        'categories_id'=>rand(1,16),
        'subcategories_id'=>rand(1,16),
        'brand_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'note 12 infinix',
        'description'=>'this is my new note  infinix',
        'price'=>123,
        'oprice'=>123,
        'categories_id'=>1,
        'subcategories_id'=>1,
        'brand_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'galaxy 12 As',
        'description'=>'galaxy phone new note 12 infinix',
        'price'=>123,
        'oprice'=>123,
        'categories_id'=>1,
        'subcategories_id'=>1,
        'brand_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'Nokia A20',
        'description'=>'my smart watch phone 11',
        'price'=>123,
        'oprice'=>123,
        'categories_id'=>1,
        'subcategories_id'=>1,
        'brand_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'morola phone',
        'description'=>'motrola phone is my favorite phones',
        'price'=>123,
        'oprice'=>123,
        'categories_id'=>1,
        'subcategories_id'=>1,
        'brand_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'7610 phone ',
        'description'=>'this is my new laptop and monitors',
        'price'=>123,
        'oprice'=>123,
        'categories_id'=>1,
        'subcategories_id'=>1,
        'brand_id'=>1,
    ]);

    \App\Models\Product::create([
        'name'=>'small phones china ',
        'description'=>'this small phone made by china',
        'price'=>123,
        'oprice'=>123,
        'categories_id'=>rand(1,16),
        'subcategories_id'=>rand(1,16),
        'brand_id'=>rand(1,16),
    ]);


}

}

