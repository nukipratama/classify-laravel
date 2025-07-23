<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\InventoryVariantType;

class InventoryVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = now();

        $inventoryVariants = [
            // Wire Sling variants
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Master link to hook',
                'swl' => 18.00,
                'length' => 3.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 16.75,
                'length' => 2.67,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 11.80,
                'length' => 2.55,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 11.80,
                'length' => 3.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 7.00,
                'length' => 1.20,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 7.80,
                'length' => 8.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 18.50,
                'length' => 4.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 34.70,
                'length' => 4.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 34.70,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 34.70,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 11.80,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 4.50,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 6.20,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 7.00,
                'length' => 5.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 9.00,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 9.00,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 3.80,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 15.00,
                'length' => 4.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 8.60,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 5.80,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 16.50,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 11.80,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 6.50,
                'length' => 4.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 16.50,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 8.70,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 4.60,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 7.80,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => 7.80,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => 9.00,
                'length' => 3.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => 8.70,
                'length' => 6.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye to Timble Eye',
                'swl' => 5.60,
                'length' => 9.00,
            ],
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Sling Groomet',
                'swl' => 0.00,
                'length' => 0.00,
            ],

            // Shackle variants
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 35.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 25.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 17.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 12.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 8.50,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 6.50,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 4.75,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 85.00,
                'length' => 0.00,
            ],

            // Hook variants
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting Handle',
                'swl' => 2.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting',
                'swl' => 2.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Eye Hook with Latch (YOKE)',
                'swl' => 5.20,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Eye Hook With Latch',
                'swl' => 3.20,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Eye Hook With Latch',
                'swl' => 15.00,
                'length' => 0.00,
            ],

            // Masterlink variants
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 25.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 11.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 90.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 65.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 60.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 35.00,
                'length' => 0.00,
            ],

            // Lashing variants
            [
                'type' => InventoryVariantType::LASHING->value,
                'name' => 'Lashing 2500 DaN',
                'swl' => 2.50,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::LASHING->value,
                'name' => 'Lashing 5000 DaN',
                'swl' => 5.00,
                'length' => 0.00,
            ],

            // Chain Sling variants
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => 2.00,
                'length' => 1.00,
            ],
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling',
                'swl' => 20.00,
                'length' => 4.25,
            ],
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling',
                'swl' => 19.00,
                'length' => 6.00,
            ],

            // Webbing Sling variants
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Red',
                'swl' => 5.00,
                'length' => 8.00,
            ],
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Orange',
                'swl' => 12.00,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Orange',
                'swl' => 10.00,
                'length' => 10.00,
            ],
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Yellow',
                'swl' => 3.00,
                'length' => 8.00,
            ],
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Green',
                'swl' => 2.00,
                'length' => 4.00,
            ],
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Brown',
                'swl' => 6.00,
                'length' => 8.00,
            ],

            // Webbing Round Sling variants
            [
                'type' => InventoryVariantType::WEBBING_ROUND_SLING->value,
                'name' => 'Webbing Round Sling',
                'swl' => 2.00,
                'length' => 1.00,
            ],

            // Chain Block variants
            [
                'type' => InventoryVariantType::CHAIN_BLOCK->value,
                'name' => 'Chain Block',
                'swl' => 10.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::CHAIN_BLOCK->value,
                'name' => 'Chain Block',
                'swl' => 2.00,
                'length' => 0.00,
            ],

            // CCU variants
            [
                'type' => InventoryVariantType::CCU->value,
                'name' => 'Basket',
                'swl' => 5.00,
                'length' => 6.16,
            ],

            // Accessories variants
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Gangway Stainless',
                'swl' => 0.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Gangway Kuning',
                'swl' => 0.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Tangga Merah',
                'swl' => 0.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Tangga Kuning',
                'swl' => 0.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Spreader Bar',
                'swl' => 25.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Extension JCB',
                'swl' => 3.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Extension Forklift 5T & 7T',
                'swl' => 2.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Extension Forklift 10T',
                'swl' => 10.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Man Basket JCB',
                'swl' => 500.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Spreader Bar Jumbo Bag isi 10',
                'swl' => 16.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Adapter Forklift 5T Jumbo Bag',
                'swl' => 4.00,
                'length' => 0.00,
            ],
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Palet Lifter',
                'swl' => 3.00,
                'length' => 0.00,
            ],

            // Pelat Besi variants
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'length' => 2.41,
            ],
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'length' => 2.43,
            ],
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'length' => 2.40,
            ],
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'length' => 1.21,
            ],
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'length' => 2.42,
            ],
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'length' => 2.37,
            ],
        ];

        foreach ($inventoryVariants as $variant) {
            DB::table('inventory_variant')->insert([
                'type' => $variant['type'],
                'name' => $variant['name'],
                'swl' => $variant['swl'],
                'length' => $variant['length'],
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ]);
        }
    }
}
