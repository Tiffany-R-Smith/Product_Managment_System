<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'license_type' => 'Athliesure',
                'license' => 'Realtree',
                'style' => 'BR4',
                'design_name' => 'Realtree',
                'style_description' => 'Sports Bra',
                'team' => 'Realtree',
                'sku' => '3RLT/BR400/1000/RET',
                'short_upc' => '341187',
                'upc' => '190604341187',
                'setup_name' => "Realtree Women's"."Long Line Tank Sports Bra",
                'price' => '25.75',
                'freight' => '9.08',
            ],
            [
                'license_type' => 'College',
                'license' => 'NCAA',
                'style' => '009',
                'design_name' => 'Upward',
                'style_description' => 'Jacquard Beach Towel',
                'team' => 'Georgia',
                'sku' => '1COL/00903/0029/RET',
                'short_upc' => '267333',
                'upc' => '190604267333',
                'setup_name' => 'NCAA Georgia Upward Jacquard Beach Towel',
                'price' => '20.00',
                'freight' => '11.08',
            ],
            [
                'license_type' => 'Entertainment',
                'license' => 'Paramount',
                'style' => '019',
                'design_name' => '',
                'style_description' => 'Jacquard Throw',
                'team' => 'Yellowstone',
                'sku' => '1YLS/01900/0001/RET',
                'short_upc' => '459424',
                'upc' => '190604459424',
                'setup_name' => 'Yellowstone Dutton Ranch Woven Jacquard Throw',
                'price' => '23.50',
                'freight' => '9.42',
            ],
            [
                'license_type' => 'Generic',
                'license' => '',
                'style' => '051',
                'design_name' => '',
                'style_description' => 'Woven Tapestry',
                'team' => 'Chinese New Year Floral',
                'sku' => '1GEN/05100/0047/AMZ',
                'short_upc' => '025872',
                'upc' => '190604025872',
                'setup_name' => 'Chinese New Year Floral Tapestry Throw',
                'price' => '20.00',
                'freight' => '7.45',
            ],
            [
                'license_type' => 'Military',
                'license' => 'Military',
                'style' => '655',
                'design_name' => 'Operation Hat Trick',
                'style_description' => 'Mink Sherpa Throw',
                'team' => 'Operation Hat Trick Honor and Defense',
                'sku' => '1OHT/65500/0001/RET',
                'short_upc' => '820903',
                'upc' => '190604820903',
                'setup_name' => 'Operation Hat Trick Honor and Defense Mink Sherpa Throw',
                'price' => '51.00',
                'freight' => '9.24',
            ],
            [
                'license_type' => 'MLB',
                'license' => 'MLB',
                'style' => '031',
                'design_name' => 'Campaign',
                'style_description' => 'Fleece Throw',
                'team' => 'Angels',
                'sku' => '1MLB/03104/0005/RET',
                'short_upc' => '276649',
                'upc' => '190604276649',
                'setup_name' => 'Angels Campaign Fleece Throw',
                'price' => '10.75',
                'freight' => '6.15',
            ],
            [
                'license_type' => 'NBA',
                'license' => 'NBA',
                'style' => '312',
                'design_name' => 'Co-Branding Mickey',
                'style_description' => 'Silk Touch Throw Mickey Hugger Set',
                'team' => 'Bucks',
                'sku' => '1COB/3122A/0015/RET',
                'short_upc' => '359687',
                'upc' => '190604359687',
                'setup_name' => 'NBA Bucks Basketball Mickey Hugger Pillow and Silk Touch Throw Set',
                'price' => '18.50',
                'freight' => '8.15',
            ],
            [
                'license_type' => 'NFL',
                'license' => 'NFL',
                'style' => 'A37',
                'design_name' => 'Play Action',
                'style_description' => '2pk Fan Towel',
                'team' => 'Bears',
                'sku' => '1NFL/A3700/0001/RET',
                'short_upc' => '816807',
                'upc' => '190604816807',
                'setup_name' => 'NFL Bears Play Action Fan Towel',
                'price' => '19.60',
                'freight' => '10',
            ],
            [
                'license_type' => 'NHL',
                'license' => 'NHL',
                'style' => '862',
                'design_name' => 'Hexagon',
                'style_description' => 'Twin Printed Comforter Set',
                'team' => 'Canadiens',
                'sku' => '1NHL/862/0012/EDC',
                'short_upc' => '275000-INN',
                'upc' => '190604275000',
                'setup_name' => 'NHL Canadiens Hexagon Twin Comforter Set',
                'price' => '36.00',
                'freight' => '9.08',
            ],
            [
                'license_type' => 'Personalization',
                'license' => 'NFL',
                'style' => 'R00',
                'design_name' => 'Personalization-Snipe',
                'style_description' => 'S/M Bathrobe',
                'team' => 'Bears',
                'sku' => '1NFL/R0001/0001/RET',
                'short_upc' => '823706',
                'upc' => '190604823706',
                'setup_name' => 'NFL Snipe Bears Personalized Robe',
                'price' => '39.95',
                'freight' => '9.08',
            ],

        ]);
    }
}
