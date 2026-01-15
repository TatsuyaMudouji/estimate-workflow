<?php
declare(strict_types=1);

require_once __DIR__ . '/estimate_core.php';

function assert_equals($expected, $actual, string $label): void {
    if ($expected !== $actual) {
        throw new RuntimeException("FAIL: {$label} expected={$expected} actual={$actual}");
    }
    echo "OK: {$label}\n";
}

assert_equals(10000.0, calculate_estimate(new EstimateParams(10, 1000)), '10 * 1000');

try {
    calculate_estimate(new EstimateParams(0, 1000));
    throw new RuntimeException('FAIL: should throw on invalid area');
} catch (InvalidArgumentException $e) {
    echo "OK: throws on invalid area\n";
}
