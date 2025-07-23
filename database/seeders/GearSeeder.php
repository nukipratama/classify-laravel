<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\InventoryVariantType;

class GearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gearData = [
            // Row 2
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Master link to hook',
                'swl' => 18.00,
                'qty' => 1,
            ],
            // Row 3
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 16.75,
                'qty' => 1,
            ],
            // Row 4
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 11.8,
                'qty' => 1,
            ],
            // Row 5
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 7.8,
                'qty' => 8,
            ],
            // Row 6
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 11.8,
                'qty' => 1,
            ],
            // Row 7
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 18.5,
                'qty' => 1,
            ],
            // Row 8
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 18.5,
                'qty' => 1,
            ],
            // Row 9
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 34.7,
                'qty' => 1,
            ],
            // Row 10
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 34.7,
                'qty' => 1,
            ],
            // Row 11
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 6.5,
                'qty' => 1,
            ],
            // Row 12
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 16.5,
                'qty' => 1,
            ],
            // Row 13
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 16.5,
                'qty' => 1,
            ],
            // Row 14
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 8.7,
                'qty' => 1,
            ],
            // Row 15
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 11.8,
                'qty' => 1,
            ],
            // Row 16
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 11.8,
                'qty' => 1,
            ],
            // Row 17
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 8.7,
                'qty' => 1,
            ],
            // Row 18
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 4.5,
                'qty' => 20,
            ],
            // Row 19
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 34.7,
                'qty' => 4,
            ],
            // Row 20
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 35.00,
                'qty' => 10,
            ],
            // Row 21
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 25.00,
                'qty' => 10,
            ],
            // Row 22
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 17.00,
                'qty' => 4,
            ],
            // Row 23
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 12.00,
                'qty' => 4,
            ],
            // Row 24
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 8.5,
                'qty' => 6,
            ],
            // Row 25
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 6.5,
                'qty' => 6,
            ],
            // Row 26
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 4.75,
                'qty' => 7,
            ],
            // Row 27
            [
                'type' => InventoryVariantType::SHACKLE->value,
                'name' => 'Bolt tipe anchor shackle',
                'swl' => 85.00,
                'qty' => 1,
            ],
            // Row 28
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting Handle',
                'swl' => 2.00,
                'qty' => 1,
            ],
            // Row 29
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting Handle',
                'swl' => 2.00,
                'qty' => 1,
            ],
            // Row 30
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting Handle',
                'swl' => 2.00,
                'qty' => 1,
            ],
            // Row 31
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting Handle',
                'swl' => 2.00,
                'qty' => 1,
            ],
            // Row 32
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Eye Hook with Latch (YOKE)',
                'swl' => 5.2,
                'qty' => 8,
            ],
            // Row 33
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Eye Hook with Latch',
                'swl' => 3.2,
                'qty' => 4,
            ],
            // Row 34
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 25.00,
                'qty' => 1,
            ],
            // Row 35
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 11.00,
                'qty' => 1,
            ],
            // Row 36
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 90.00,
                'qty' => 2,
            ],
            // Row 37
            [
                'type' => InventoryVariantType::LASHING->value,
                'name' => 'Lashing 2500 DaN',
                'swl' => 2.5,
                'qty' => 4,
            ],
            // Row 38
            [
                'type' => InventoryVariantType::LASHING->value,
                'name' => 'Lashing 5000 DaN',
                'swl' => 5.00,
                'qty' => 4,
            ],
            // Row 39
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => 2.00,
                'qty' => 2,
            ],
            // Row 40
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => 2.00,
                'qty' => 2,
            ],
            // Row 41
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => 2.00,
                'qty' => 2,
            ],
            // Row 42
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling c/w Hook Gred 8',
                'swl' => 2.00,
                'qty' => 2,
            ],
            // Row 43
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Red',
                'swl' => 5.00,
                'qty' => 2,
            ],
            // Row 44
            [
                'type' => InventoryVariantType::WEBBING_ROUND_SLING->value,
                'name' => 'Webbing Round Sling',
                'swl' => 2.00,
                'qty' => 10,
            ],
            // Row 45
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Orange',
                'swl' => 12.00,
                'qty' => 2,
            ],
            // Row 46
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Orange',
                'swl' => 10.00,
                'qty' => 2,
            ],
            // Row 47
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Yellow',
                'swl' => 3.00,
                'qty' => 2,
            ],
            // Row 48
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Green',
                'swl' => 2.00,
                'qty' => 2,
            ],
            // Row 49
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Red',
                'swl' => 5.00,
                'qty' => 4,
            ],
            // Row 50
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Green',
                'swl' => 2.00,
                'qty' => 4,
            ],
            // Row 51
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Yellow',
                'swl' => 3.00,
                'qty' => 4,
            ],
            // Row 52
            [
                'type' => InventoryVariantType::WEBBING_SLING->value,
                'name' => 'Webbing Brown',
                'swl' => 6.00,
                'qty' => 4,
            ],
            // Row 53
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 6.2,
                'qty' => 4,
            ],
            // Row 54
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 7.8,
                'qty' => 11,
            ],
            // Row 55
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 7.00,
                'qty' => 1,
            ],
            // Row 56
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 9.00,
                'qty' => 4,
            ],
            // Row 57
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 9.00,
                'qty' => 4,
            ],
            // Row 58
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Soft Eye',
                'swl' => 3.8,
                'qty' => 4,
            ],
            // Row 59
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 4.6,
                'qty' => 1,
            ],
            // Row 60
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye',
                'swl' => 7.8,
                'qty' => 4,
            ],
            // Row 61
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => 7.8,
                'qty' => 4,
            ],
            // Row 62
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Timble Eye to Timble Eye',
                'swl' => 5.6,
                'qty' => 4,
            ],
            // Row 63
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 7.00,
                'qty' => 1,
            ],
            // Row 64
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 34.7,
                'qty' => 8,
            ],
            // Row 65
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 15.00,
                'qty' => 1,
            ],
            // Row 66
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => 9.00,
                'qty' => 2,
            ],
            // Row 67
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 18.5,
                'qty' => 1,
            ],
            // Row 68
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 8.6,
                'qty' => 1,
            ],
            // Row 69
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft Eye to Timble Eye',
                'swl' => 8.7,
                'qty' => 4,
            ],
            // Row 70
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 5.8,
                'qty' => 2,
            ],
            // Row 71
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Hook Shorting',
                'swl' => 2.00,
                'qty' => 6,
            ],
            // Row 72
            [
                'type' => InventoryVariantType::HOOK->value,
                'name' => 'Eye Hook With Latch',
                'swl' => 15.00,
                'qty' => 4,
            ],
            // Row 73
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 65.00,
                'qty' => 1,
            ],
            // Row 74
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 60.00,
                'qty' => 1,
            ],
            // Row 75
            [
                'type' => InventoryVariantType::MASTERLINK->value,
                'name' => 'Masterlink',
                'swl' => 35.00,
                'qty' => 2,
            ],
            // Row 76
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Sling Groomet',
                'swl' => 0.00,
                'qty' => 1,
            ],
            // Row 77
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Gangway Stainless',
                'swl' => 0.00,
                'qty' => 1,
            ],
            // Row 78
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Gangway Kuning',
                'swl' => 0.00,
                'qty' => 1,
            ],
            // Row 79
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 1,
            ],
            // Row 80
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 1,
            ],
            // Row 81
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Sling Soft eye to soft eye',
                'swl' => 16.5,
                'qty' => 4,
            ],
            // Row 82
            [
                'type' => InventoryVariantType::CHAIN_BLOCK->value,
                'name' => 'Chain Block',
                'swl' => 10.00,
                'qty' => 1,
            ],
            // Row 83
            [
                'type' => InventoryVariantType::CHAIN_BLOCK->value,
                'name' => 'Chain Block',
                'swl' => 2.00,
                'qty' => 1,
            ],
            // Row 84
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Tangga Merah',
                'swl' => 0.00,
                'qty' => 2,
            ],
            // Row 85
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 30,
            ],
            // Row 86
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 6,
            ],
            // Row 87
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 3,
            ],
            // Row 88
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 4,
            ],
            // Row 89
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 10,
            ],
            // Row 90
            [
                'type' => InventoryVariantType::CCU->value,
                'name' => 'Basket',
                'swl' => 5.00,
                'qty' => 4,
            ],
            // Row 91
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 2,
            ],
            // Row 92
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 4,
            ],
            // Row 93
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 6,
            ],
            // Row 94
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Spreader Bar',
                'swl' => 25.00,
                'qty' => 1,
            ],
            // Row 95
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Extension JCB',
                'swl' => 3.00,
                'qty' => 1,
            ],
            // Row 96
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Extension Forklift 5T & 7T',
                'swl' => 2.00,
                'qty' => 1,
            ],
            // Row 97
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Man Basket JCB',
                'swl' => 500.00,
                'qty' => 1,
            ],
            // Row 98
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Spreader Bar Jumbo Bag isi 10',
                'swl' => 16.00,
                'qty' => 1,
            ],
            // Row 99
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Extension Forklift 10T',
                'swl' => 10.00,
                'qty' => 1,
            ],
            // Row 100
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Adapter Forklift 5T Jumbo Bag',
                'swl' => 4.00,
                'qty' => 1,
            ],
            // Row 101
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Palet Lifter',
                'swl' => 3.00,
                'qty' => 1,
            ],
            // Row 102
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling',
                'swl' => 20.00,
                'qty' => 1,
            ],
            // Row 103
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling',
                'swl' => 20.00,
                'qty' => 1,
            ],
            // Row 104
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling',
                'swl' => 19.00,
                'qty' => 1,
            ],
            // Row 105
            [
                'type' => InventoryVariantType::CHAIN_SLING->value,
                'name' => 'Chain Sling',
                'swl' => 19.00,
                'qty' => 1,
            ],
            // Row 106
            [
                'type' => InventoryVariantType::ACCESORIES->value,
                'name' => 'Tangga Kuning',
                'swl' => 0.00,
                'qty' => 1,
            ],
            // Row 107
            [
                'type' => InventoryVariantType::WIRE_SLING->value,
                'name' => 'Wire Stinger Timble Eye to Hook',
                'swl' => 11.8,
                'qty' => 1,
            ],
            // Row 108
            [
                'type' => InventoryVariantType::PELAT_BESI->value,
                'name' => 'Pelat Besi',
                'swl' => 0.00,
                'qty' => 2,
            ],
        ];

        foreach ($gearData as $gear) {
            DB::table('gear')->insert([
                'type' => $gear['type'],
                'name' => $gear['name'],
                'swl' => $gear['swl'],
                'qty' => $gear['qty'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
