<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module\WebDriver
{
	/**
	 * Wait until all ajax queries will pass on testing page
	 *
	 * @param integer $timeout
	 *
	 * @return void
	 */
	public function waitForAjax($timeout = 30)
	{
		$this->waitForJS('return $.active == 0;', $timeout);
	}

	public function waitForPageLoaded($timeout = 30)
	{
		$this->waitForJS('return document.readyState === "complete"', $timeout);
	}

	public function amOnPage($page)
	{
		parent::amOnPage($page);
		$this->waitForPageLoaded();
	}
}
