<?php

namespace App\Enums;

enum Crane: int
{
    case CRANE_120 = 120;
    case CRANE_280 = 280;

    public function label(): string
    {
        return match ($this) {
            self::CRANE_120 => '120 Ton',
            self::CRANE_280 => '280 Ton',
        };
    }
}
