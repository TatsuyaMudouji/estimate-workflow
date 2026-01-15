from estimate_core import EstimateParams, calculate_estimate


def test_calculate_estimate_success():
    params = EstimateParams(area=10, unit_price=1000)
    assert calculate_estimate(params) == 10000


def test_calculate_estimate_invalid_values():
    try:
        calculate_estimate(EstimateParams(area=0, unit_price=1000))
        assert False, "should raise"
    except ValueError:
        assert True
