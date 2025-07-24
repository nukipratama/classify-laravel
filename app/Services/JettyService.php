<?php

namespace App\Services;

use App\Enums\Shape;
use App\Enums\Crane;
use App\Exceptions\CustomException;
use App\Models\JettyMap;
use App\Models\InventoryVariant;

class JettyService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Process inventory data after validation
     *
     * @param float $berat
     * @param Shape $bentuk
     * @param Crane $crane
     * @return array
     * @throws CustomException
     */
    public function process(float $berat, Shape $bentuk, Crane $crane): array
    {
        $this->validate($berat, $bentuk, $crane);

        $jettyMaps = JettyMap::query()
            ->with(['inventory_variant' => fn ($q) => $q->withTotalQuantity()])
            ->where('min_weight', '<=', $berat)
            ->where('max_weight', '>=', $berat)
            ->where('shape', $bentuk)
            ->where('crane', $crane)
            ->get();

        if ($jettyMaps->isEmpty()) {
            throw new CustomException('Not Available.');
        }

        $inventoryVariants = [];
        $jettyMaps->each(function (JettyMap $jettyMap) use (&$inventoryVariants) {
            if ($jettyMap->doesntHaveSufficientQuantity()) {
                throw new CustomException('Not Available.');
            }

            $label = "{$jettyMap->required_quantity}x {$jettyMap->inventory_variant->getLabel()}";
            if (!empty($jettyMap->note)) {
                $label .= " ({$jettyMap->note})";
            }

            $inventoryVariants[] = $label;
        });

        return [
            'berat' => $berat,
            'bentuk' => $bentuk,
            'crane' => $crane,
            'inventory_variants' => $inventoryVariants,
        ];
    }

    /**
     * Validate crane capacity and jetty strength
     *
     * @param float $berat
     * @param Shape $bentuk
     * @param Crane $crane
     * @throws CustomException
     */
    private function validate(float $berat, Shape $bentuk, Crane $crane): void
    {
        if ($berat < 1.0) {
            throw new CustomException('Berat tidak boleh kurang dari 1.0 Ton.');
        }

        if ($berat > 63.0) {
            throw new CustomException('Jetty tidak kuat.');
        }

        if ($crane === Crane::CRANE_120 && $berat > 28.0) {
            throw new CustomException('Crane tidak mendukung.');
        }

        if ($crane === Crane::CRANE_280 && $berat > 50.0 && $bentuk === Shape::SQUARE_CYLINDER) {
            throw new CustomException('Lifting Equipment tidak tersedia.');
        }
    }
}
