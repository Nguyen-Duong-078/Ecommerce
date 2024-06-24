<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductGallery;
use App\Models\ProductSize;
use App\Models\ProductVariant;
use App\Models\Tag;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

use function Laravel\Prompts\table;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ProductVariant::query()->truncate();
        ProductGallery::query()->truncate();
        DB::table('product_tag')->truncate();
        Product::query()->truncate();
        ProductSize::query()->truncate();
        ProductColor::query()->truncate();
        ProductVariant::query()->truncate();
        Tag::factory(15)->create();

        foreach (['S', 'M', 'L', 'XL', 'XXL'] as $item) {
            ProductSize::query()->create([
                'name' => $item
            ]);
        }

        foreach (['Black', 'Blue', 'Green', 'Yellow', 'Red '] as $item) {
            ProductColor::query()->create([
                'name' => $item
            ]);
        }

        for ($i = 0; $i < 1000; $i++) {
            $name = fake()->text('100');
            Product::query()->create([
                'catelogue_id' => rand(12, 16),
                'name' => $name,
                'slug' => Str::slug($name) . '-' . Str::random(8),
                'sku' => Str::random(8) . $i,
                'img_thumbnail' => 'https://canifa.com/img/1000/1500/resize/6/o/6ot24s002-sb001-thumb.webp',
                'price_regular' => 600000,
                'price_sale' => 490000,
            ]);
        }

        for ($i = 1; $i < 1001; $i++) {
            ProductGallery::query()->insert([
                [
                    'product_id' => $i,
                    'image' => 'https://canifa.com/img/1000/1500/resize/6/o/6ot24s002-sb001-thumb.webp',
                ],
                [
                    'product_id' => $i,
                    'image' => 'https://canifa.com/img/1000/1500/resize/6/o/6ot24s002-sb504-thumb.webp',
                ]
            ]);

        }

        for ($i = 1; $i < 1001; $i++) {
            DB::table('product_tag')->insert([
                ['product_id' => $i, 'tag_id' => rand(1, 8)],
                ['product_id' => $i, 'tag_id' => rand(9, 15)]
            ]);
        }

        for ($product_ID = 1; $product_ID < 1001; $product_ID++) {
            $data = [];
            for ($size_ID = 1; $size_ID < 6; $size_ID++) {
                for ($colorID = 1; $colorID < 6; $colorID++) {
                    $data[] = [
                        'product_id' => $product_ID,
                        'product_size_id' => $size_ID,
                        'product_color_id' => $colorID,
                        'quatity' => 100,
                        'image' => 'https://canifa.com/img/1000/1500/resize/6/o/6ot24s002-sb001-thumb.webp',
                    ];
                }
            }
            DB::table('product_variants')->insert($data);
        }
    }
}
