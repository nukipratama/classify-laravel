<?php

namespace App\Enums;

enum Shape: string
{
    case SQUARE = 'square';
    case SQUARE_CYLINDER = 'square_cylinder';

    public function label(): string
    {
        return match ($this) {
            self::SQUARE => 'Persegi (4 Padeyes)',
            self::SQUARE_CYLINDER => 'Persegi / Silinder (2 Padeyes)',
        };
    }

    public function padEyesCount(): int
    {
        return match ($this) {
            self::SQUARE => 4,
            self::SQUARE_CYLINDER => 2,
        };
    }
}
