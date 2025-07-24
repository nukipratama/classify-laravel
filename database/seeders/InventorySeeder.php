<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\InventoryVariantType;
use App\Models\InventoryVariant;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = now();

        // Map CSV types to enum values
        $typeMapping = [
            'Wire Sling' => InventoryVariantType::WIRE_SLING->value,
            'Shackle' => InventoryVariantType::SHACKLE->value,
            'Hook' => InventoryVariantType::HOOK->value,
            'Masterlink' => InventoryVariantType::MASTERLINK->value,
            'Lashing' => InventoryVariantType::LASHING->value,
            'Chain Sling' => InventoryVariantType::CHAIN_SLING->value,
            'Webbing Sling' => InventoryVariantType::WEBBING_SLING->value,
            'Webbing Round Sling' => InventoryVariantType::WEBBING_ROUND_SLING->value,
            'Accessories' => InventoryVariantType::ACCESORIES->value,
            'Pelat Besi' => InventoryVariantType::PELAT_BESI->value,
            'Chain Block' => InventoryVariantType::CHAIN_BLOCK->value,
            'CCU' => InventoryVariantType::CCU->value,
        ];

        $inventoryData = [
            // Row 2
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Stinger Master link to hook',
                'swl' => '18',
                'length' => '3',
                'qty' => '1',
            ],
            // Row 3
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => '16,75',
                'length' => '2,67',
                'qty' => '1',
            ],
            // Row 4
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => '11,8',
                'length' => '2,55',
                'qty' => '1',
            ],
            // Row 5
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '7,8',
                'length' => '8',
                'qty' => '8',
            ],
            // Row 6
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '11,8',
                'length' => '6',
                'qty' => '1',
            ],
            // Row 7
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '18,5',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 8
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '18,5',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 9
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '34,7',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 10
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '34,7',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 11
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '6,5',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 12
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '16,5',
                'length' => '10',
                'qty' => '1',
            ],
            // Row 13
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '16,5',
                'length' => '10',
                'qty' => '1',
            ],
            // Row 14
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '8,7',
                'length' => '10',
                'qty' => '1',
            ],
            // Row 15
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '11,8',
                'length' => '6',
                'qty' => '1',
            ],
            // Row 16
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '11,8',
                'length' => '6',
                'qty' => '1',
            ],
            // Row 17
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '8,7',
                'length' => '10',
                'qty' => '1',
            ],
            // Row 18
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '4,5',
                'length' => '6',
                'qty' => '20',
            ],
            // Row 19
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '34,7',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 20
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '35',
                'length' => '',
                'qty' => '10',
            ],
            // Row 21
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '25',
                'length' => '',
                'qty' => '10',
            ],
            // Row 22
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '17',
                'length' => '',
                'qty' => '4',
            ],
            // Row 23
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '12',
                'length' => '',
                'qty' => '4',
            ],
            // Row 24
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '8,5',
                'length' => '',
                'qty' => '6',
            ],
            // Row 25
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '6,5',
                'length' => '',
                'qty' => '6',
            ],
            // Row 26
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '4,75',
                'length' => '',
                'qty' => '7',
            ],
            // Row 27
            [
                'type' => 'Shackle',
                'name' => 'Bolt tipe anchor shackle',
                'swl' => '85',
                'length' => '',
                'qty' => '1',
            ],
            // Row 28
            [
                'type' => 'Hook',
                'name' => 'Hook Shorting Handle',
                'swl' => '2',
                'length' => '',
                'qty' => '1',
            ],
            // Row 29
            [
                'type' => 'Hook',
                'name' => 'Hook Shorting Handle',
                'swl' => '2',
                'length' => '',
                'qty' => '1',
            ],
            // Row 30
            [
                'type' => 'Hook',
                'name' => 'Hook Shorting Handle',
                'swl' => '2',
                'length' => '',
                'qty' => '1',
            ],
            // Row 31
            [
                'type' => 'Hook',
                'name' => 'Hook Shorting Handle',
                'swl' => '2',
                'length' => '',
                'qty' => '1',
            ],
            // Row 32
            [
                'type' => 'Hook',
                'name' => 'Eye Hook with Latch (YOKE)',
                'swl' => '5,2',
                'length' => '',
                'qty' => '8',
            ],
            // Row 33
            [
                'type' => 'Hook',
                'name' => 'Eye Hook with Latch',
                'swl' => '3,2',
                'length' => '',
                'qty' => '4',
            ],
            // Row 34
            [
                'type' => 'Masterlink',
                'name' => 'Masterlink',
                'swl' => '25',
                'length' => '',
                'qty' => '1',
            ],
            // Row 35
            [
                'type' => 'Masterlink',
                'name' => 'Masterlink',
                'swl' => '11',
                'length' => '',
                'qty' => '1',
            ],
            // Row 36
            [
                'type' => 'Masterlink',
                'name' => 'Masterlink',
                'swl' => '90',
                'length' => '',
                'qty' => '2',
            ],
            // Row 37
            [
                'type' => 'Lashing',
                'name' => 'Lashing 2500 DaN',
                'swl' => '2,5',
                'length' => '',
                'qty' => '4',
            ],
            // Row 38
            [
                'type' => 'Lashing',
                'name' => 'Lashing 5000 DaN',
                'swl' => '5',
                'length' => '',
                'qty' => '4',
            ],
            // Row 39
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => '2',
                'length' => '1',
                'qty' => '2',
            ],
            // Row 40
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => '2',
                'length' => '1',
                'qty' => '2',
            ],
            // Row 41
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => '2',
                'length' => '1',
                'qty' => '2',
            ],
            // Row 42
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => '2',
                'length' => '1',
                'qty' => '2',
            ],
            // Row 43
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Red',
                'swl' => '5',
                'length' => '8',
                'qty' => '2',
            ],
            // Row 44
            [
                'type' => 'Webbing Round Sling',
                'name' => 'Webbing Round Sling',
                'swl' => '2',
                'length' => '1',
                'qty' => '10',
            ],
            // Row 45
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Orange',
                'swl' => '12',
                'length' => '10',
                'qty' => '2',
            ],
            // Row 46
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Orange',
                'swl' => '10',
                'length' => '10',
                'qty' => '2',
            ],
            // Row 47
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Yellow',
                'swl' => '3',
                'length' => '8',
                'qty' => '2',
            ],
            // Row 48
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Green',
                'swl' => '2',
                'length' => '4',
                'qty' => '2',
            ],
            // Row 49
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Red',
                'swl' => '5',
                'length' => '8',
                'qty' => '4',
            ],
            // Row 50
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Green',
                'swl' => '2',
                'length' => '4',
                'qty' => '4',
            ],
            // Row 51
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Yellow',
                'swl' => '3',
                'length' => '8',
                'qty' => '4',
            ],
            // Row 52
            [
                'type' => 'Webbing Sling',
                'name' => 'Webbing Brown',
                'swl' => '6',
                'length' => '8',
                'qty' => '4',
            ],
            // Row 53
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => '6,2',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 54
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => '7,8',
                'length' => '8',
                'qty' => '11',
            ],
            // Row 55
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => '7',
                'length' => '5',
                'qty' => '1',
            ],
            // Row 56
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => '9',
                'length' => '10',
                'qty' => '4',
            ],
            // Row 57
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => '9',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 58
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => '3,8',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 59
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '4,6',
                'length' => '6',
                'qty' => '1',
            ],
            // Row 60
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye',
                'swl' => '7,8',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 61
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => '7,8',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 62
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Timble Eye to Timble Eye',
                'swl' => '5,6',
                'length' => '9',
                'qty' => '4',
            ],
            // Row 63
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => '7',
                'length' => '1,2',
                'qty' => '1',
            ],
            // Row 64
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '34,7',
                'length' => '10',
                'qty' => '8',
            ],
            // Row 65
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '15',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 66
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => '9',
                'length' => '3',
                'qty' => '2',
            ],
            // Row 67
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '18,5',
                'length' => '4',
                'qty' => '1',
            ],
            // Row 68
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '8,6',
                'length' => '10',
                'qty' => '1',
            ],
            // Row 69
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => '8,7',
                'length' => '6',
                'qty' => '4',
            ],
            // Row 70
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '5,8',
                'length' => '6',
                'qty' => '2',
            ],
            // Row 71
            [
                'type' => 'Hook',
                'name' => 'Hook Shorting',
                'swl' => '2',
                'length' => '',
                'qty' => '6',
            ],
            // Row 72
            [
                'type' => 'Hook',
                'name' => 'Eye Hook With Latch',
                'swl' => '15',
                'length' => '',
                'qty' => '4',
            ],
            // Row 73
            [
                'type' => 'Masterlink',
                'name' => 'Masterlink',
                'swl' => '65',
                'length' => '',
                'qty' => '1',
            ],
            // Row 74
            [
                'type' => 'Masterlink',
                'name' => 'Masterlink',
                'swl' => '60',
                'length' => '',
                'qty' => '1',
            ],
            // Row 75
            [
                'type' => 'Masterlink',
                'name' => 'Masterlink',
                'swl' => '35',
                'length' => '',
                'qty' => '2',
            ],
            // Row 76
            [
                'type' => 'Wire Sling',
                'name' => 'Sling Groomet',
                'swl' => '',
                'length' => '',
                'qty' => '1',
            ],
            // Row 77
            [
                'type' => 'Accessories',
                'name' => 'Gangway Stainless',
                'swl' => '',
                'length' => '',
                'qty' => '',
            ],
            // Row 78
            [
                'type' => 'Accessories',
                'name' => 'Gangway Kuning',
                'swl' => '',
                'length' => '',
                'qty' => '1',
            ],
            // Row 79
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,41',
                'qty' => '1',
            ],
            // Row 80
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,43',
                'qty' => '1',
            ],
            // Row 81
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => '16,5',
                'length' => '10',
                'qty' => '4',
            ],
            // Row 82
            [
                'type' => 'Chain Block',
                'name' => 'Chain Block',
                'swl' => '10',
                'length' => '',
                'qty' => '1',
            ],
            // Row 83
            [
                'type' => 'Chain Block',
                'name' => 'Chain Block',
                'swl' => '2',
                'length' => '',
                'qty' => '1',
            ],
            // Row 84
            [
                'type' => 'Accessories',
                'name' => 'Tangga Merah',
                'swl' => '',
                'length' => '',
                'qty' => '2',
            ],
            // Row 85
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,4',
                'qty' => '30',
            ],
            // Row 86
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,4',
                'qty' => '6',
            ],
            // Row 87
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,4',
                'qty' => '3',
            ],
            // Row 88
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '1,21',
                'qty' => '4',
            ],
            // Row 89
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '1,21',
                'qty' => '10',
            ],
            // Row 90
            [
                'type' => 'CCU',
                'name' => 'Basket',
                'swl' => '5',
                'length' => '6,16',
                'qty' => '4',
            ],
            // Row 91
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,42',
                'qty' => '2',
            ],
            // Row 92
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,42',
                'qty' => '4',
            ],
            // Row 93
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '2,37',
                'qty' => '6',
            ],
            // Row 94
            [
                'type' => 'Accessories',
                'name' => 'Spreader Bar',
                'swl' => '25',
                'length' => '',
                'qty' => '1',
            ],
            // Row 95
            [
                'type' => 'Accessories',
                'name' => 'Extension JCB',
                'swl' => '3',
                'length' => '',
                'qty' => '1',
            ],
            // Row 96
            [
                'type' => 'Accessories',
                'name' => 'Extension Forklift 5T & 7T',
                'swl' => '2',
                'length' => '',
                'qty' => '1',
            ],
            // Row 97
            [
                'type' => 'Accessories',
                'name' => 'Man Basket JCB',
                'swl' => '500',
                'length' => '',
                'qty' => '1',
            ],
            // Row 98
            [
                'type' => 'Accessories',
                'name' => 'Spreader Bar Jumbo Bag isi 10',
                'swl' => '16',
                'length' => '',
                'qty' => '1',
            ],
            // Row 99
            [
                'type' => 'Accessories',
                'name' => 'Extension Forklift 10T',
                'swl' => '10',
                'length' => '',
                'qty' => '1',
            ],
            // Row 100
            [
                'type' => 'Accessories',
                'name' => 'Adapter Forklift 5T Jumbo Bag',
                'swl' => '4',
                'length' => '',
                'qty' => '1',
            ],
            // Row 101
            [
                'type' => 'Accessories',
                'name' => 'Palet Lifter',
                'swl' => '3',
                'length' => '',
                'qty' => '1',
            ],
            // Row 102
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling',
                'swl' => '20',
                'length' => '4,25',
                'qty' => '1',
            ],
            // Row 103
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling',
                'swl' => '20',
                'length' => '4,25',
                'qty' => '1',
            ],
            // Row 104
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling',
                'swl' => '19',
                'length' => '6',
                'qty' => '1',
            ],
            // Row 105
            [
                'type' => 'Chain Sling',
                'name' => 'Chain Sling',
                'swl' => '19',
                'length' => '6',
                'qty' => '1',
            ],
            // Row 106
            [
                'type' => 'Accessories',
                'name' => 'Tangga Kuning',
                'swl' => '',
                'length' => '',
                'qty' => '1',
            ],
            // Row 107
            [
                'type' => 'Wire Sling',
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => '11,8',
                'length' => '3',
                'qty' => '1',
            ],
            // Row 108
            [
                'type' => 'Pelat Besi',
                'name' => 'Pelat Besi',
                'swl' => '',
                'length' => '1,21',
                'qty' => '2',
            ],
        ];

        foreach ($inventoryData as $item) {
            // Convert comma-separated decimals to proper decimal format
            $swl = str_replace(',', '.', $item['swl'] ?: '0');
            $length = str_replace(',', '.', $item['length'] ?: '0');
            $quantity = (int) ($item['qty'] ?: 0);

            // Map type to enum value
            $enumType = $typeMapping[$item['type']] ?? null;
            if (!$enumType) {
                continue; // Skip unknown types
            }

            // Normalize name to match InventoryVariantSeeder (case-insensitive)
            $normalizedName = $this->normalizeName($item['name']);

            // Find the inventory variant ID
            $variant = InventoryVariant::query()
                ->where('type', $enumType)
                ->where('name', $normalizedName)
                ->where('swl', (float) $swl)
                ->where('length', (float) $length)
                ->first();

            if ($variant) {
                DB::table('inventory')->insert([
                    'inventory_variant_id' => $variant->id,
                    'quantity' => $quantity,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]);
            } else {
                // Log or handle missing variant
                echo "Warning: Could not find variant for {$item['type']} - {$normalizedName} (SWL: {$swl}, Length: {$length})\n";
            }
        }
    }

    /**
     * Normalize name to match InventoryVariantSeeder naming convention
     */
    private function normalizeName(string $name): string
    {
        // Define normalization rules
        $normalizations = [
            'Wire Sling Soft eye to soft eye' => 'Wire Sling Soft Eye to Soft Eye',
            'Eye Hook with Latch' => 'Eye Hook With Latch',
        ];

        return $normalizations[$name] ?? $name;
    }
}
