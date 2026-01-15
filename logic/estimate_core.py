"""
Estimate core calculation logic (Python)
This file mirrors the JS core to validate business rules independent of UI.
"""

from dataclasses import dataclass


@dataclass(frozen=True)
class EstimateParams:
    area: float
    unit_price: float


def calculate_estimate(params: EstimateParams) -> float:
    if params.area is None or params.unit_price is None:
        raise ValueError("Invalid input for estimation")

    if params.area <= 0 or params.unit_price <= 0:
        raise ValueError("Values must be greater than zero")

    return params.area * params.unit_price
