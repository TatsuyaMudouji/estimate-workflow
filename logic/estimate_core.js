/**
 * Estimate core calculation logic
 * This file intentionally separates business rules from UI concerns.
 */

export function calculateEstimate(params) {
  const { area, unitPrice } = params;

  if (area <= 0 || unitPrice <= 0) {
  throw new Error('Values must be greater than zero');
}

  return area * unitPrice;
}
