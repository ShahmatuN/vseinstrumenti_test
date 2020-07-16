<?php

use Page\Acceptance\GoodsPage;
use Page\Acceptance\CartNotifyPage;

class BucketCest
{
	public function checkAddBucketOnGoodPage(AcceptanceTester $I)
	{
		$I->amOnPage(
			'/stanki/sverlilnye/na-magnitnoy-podoshve/rotabroach/' .
			'elektricheskij-s-povorotnym-osnovaniem-element-100-5156/'
		);
		$I->click(GoodsPage::ADD_CART_SALE_BUTTON);
		$I->waitForElementVisible(CartNotifyPage::CART_NOTIFY_WINDOW, 15);
	}

	public function checkAddBucketOnSearchResultPage(AcceptanceTester $I)
	{
		$I->amOnPage('/instrument/gravery/akkumulyatornye/');
		$I->click(GoodsPage::BEST_PRICE_CART_BUTTON);
		$I->waitForElementVisible(CartNotifyPage::CART_NOTIFY_WINDOW, 15);
	}
}