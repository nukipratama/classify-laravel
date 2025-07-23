<?php

namespace App\Enums;

enum Crane: string
{
    case CRANE_120 = '120-Ton';
    case CRANE_280 = '280-Ton';

    public function label(): string
    {
        return match ($this) {
            self::CRANE_120 => '120 Ton',
            self::CRANE_280 => '280 Ton',
        };
    }
}
