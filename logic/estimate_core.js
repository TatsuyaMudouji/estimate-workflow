/**
 * Estimate core calculation logic
 * This file intentionally separates business rules from UI concerns.
 */

export function calculateEstimate(params) {
  const { area, unitPrice } = params;

  if (!area || !unitPrice) {
    throw new Error('Invalid input for estimation');
  }

  return area * unitPrice;
}
