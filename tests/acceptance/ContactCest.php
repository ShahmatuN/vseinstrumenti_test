<?php

class ContactCest
{
	public function checkContactPhone(AcceptanceTester $I)
	{
		$I->amOnPage('/contacts/1.html');
		$phoneNumber = $I->grabTextFrom(
			'//*[contains(.,"Отдел подбора персонала")]/../*[contains(@class, "contact_info_table_telefon")]'
		);
		$I->assertEquals('+7 (495) 647-60-00', $phoneNumber);
	}
}
