<?php

namespace App\Enums;

enum GearType: string
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
}
