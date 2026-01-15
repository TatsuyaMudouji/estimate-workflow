<?php
declare(strict_types=1);

/**
 * Estimate core calculation logic (PHP)
 * Mirrors JS/Python core to validate business rules independent of UI.
 */

final class EstimateParams {
    public float $area;
    public float $unitPrice;

    public function __construct(float $area, float $unitPrice) {
        $this->area = $area;
        $this->unitPrice = $unitPrice;
    }
}

function calculate_estimate(EstimateParams $params): float {
    if ($params->area <= 0 || $params->unitPrice <= 0) {
        throw new InvalidArgumentException('Values must be greater than zero');
    }
    return $params->area * $params->unitPrice;
}
