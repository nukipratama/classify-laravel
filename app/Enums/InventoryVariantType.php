<?php

namespace App\Enums;

enum InventoryVariantType: string
{
    case WIRE_SLING = 'wire_sling';
    case SHACKLE = 'shackle';
    case HOOK = 'hook';
    case MASTERLINK = 'masterlink';
    case LASHING = 'lashing';
    case CHAIN_SLING = 'chain_sling';
    case WEBBING_SLING = 'webbing_sling';
    case WEBBING_ROUND_SLING = 'webbing_round_sling';
    case ACCESORIES = 'accesories';
    case PELAT_BESI = 'pelat_besi';
    case CHAIN_BLOCK = 'chain_block';
    case CCU = 'ccu';

    /**
     * Get the display name for the inventory type
     */
    public function getDisplayName(): string
    {
        return match ($this) {
            self::WIRE_SLING => 'Wire Sling',
            self::SHACKLE => 'Shackle',
            self::HOOK => 'Hook',
            self::MASTERLINK => 'Master Link',
            self::LASHING => 'Lashing',
            self::CHAIN_SLING => 'Chain Sling',
            self::WEBBING_SLING => 'Webbing Sling',
            self::WEBBING_ROUND_SLING => 'Webbing Round Sling',
            self::ACCESORIES => 'Accessories',
            self::PELAT_BESI => 'Pelat Besi',
            self::CHAIN_BLOCK => 'Chain Block',
            self::CCU => 'CCU',
        };
    }
}
