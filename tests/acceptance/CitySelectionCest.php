<?php

use Page\Acceptance\HeaderPage;

class CitySelectionCest
{
	/**
	 * @param AcceptanceTester $I
	 * @throws Exception
	 */
	public function checkSelectionLink(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->click(HeaderPage::OTHER_CITY_LINK);
		$I->waitForElementVisible(HeaderPage::CITY_DROPDOWN, 15);
	}

	public function checkDeliveryCitySelection(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->click(HeaderPage::OTHER_CITY_LINK);
		$I->waitForElementVisible(HeaderPage::CITY_DROPDOWN, 15);
		$listOfCityWithDelivery = $I->grabMultiple(
			'//*[contains(@class, "deliveryCourierConteiner")]/*[contains(@class, "region_check") ' .
			'and not(contains(@class, "fst-b"))]'
		);
		$randomCity = $listOfCityWithDelivery[array_rand($listOfCityWithDelivery)];
		$I->click("//*[contains(.,'$randomCity')and contains(@class, 'region_check')]");
		$I->waitForAjax();
		$I->waitForText($randomCity, 10, HeaderPage::OTHER_CITY_LINK);
	}
}