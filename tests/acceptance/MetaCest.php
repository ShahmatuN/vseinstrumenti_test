<?php

class MetaCest
{
	public function checkTitle(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->canSeeInTitle(
			'Интернет-магазин ВсеИнструменты.ру - электроинструмент и оборудование: ' .
			'климатическое, садовое, клининговое, автогаражное'
		);
	}
}
