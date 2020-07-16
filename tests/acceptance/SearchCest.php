<?php

use Page\Acceptance\HomePage;

class SearchCest
{
	/**
	 * @param AcceptanceTester $I
	 * @throws Exception
	 */
	public function checkSearch(AcceptanceTester $I)
	{
		$I->wantTo('Check search and use button icon');
		$I->amOnPage('/');
		$I->waitForElementVisible(HomePage::SEARCH_FIELD, 5);
		$I->fillField(HomePage::SEARCH_FIELD, HomePage::SEARCH_ITEM);
		$I->waitForText(HomePage::SEARCH_ITEM, 10, HomePage::SEARCH_MENU_ITEM);
		$I->click(HomePage::SEARCH_SUBMIT_BUTTON);
		$I->waitForText(HomePage::SEARCH_ITEM, 10, ' div.content > h1');
	}

	/**
	 * @param AcceptanceTester $I
	 * @throws Exception
	 */
	public function requestCallBack(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->click('.callFromWebsite');
		$I->waitForElementVisible(HomePage::FIELD_NAME, 5);
		$I->fillField(HomePage::FIELD_NAME, 'Test');
		$I->seeInField(HomePage::FIELD_NAME, 'Test');
		$I->fillField(HomePage::FIELD_PHONE, '9211111111');
		$I->seeInField(HomePage::FIELD_PHONE, '+7 (921) 111-11-11');
		$I->click(HomePage::SUBMIT_BUTTON);
		$I->waitForElementVisible(HomePage::SUCCESS_POPUP, 5);
	}
}