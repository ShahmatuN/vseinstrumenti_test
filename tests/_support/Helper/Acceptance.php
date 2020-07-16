<?php

namespace Helper;

use Codeception\TestInterface;


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

	public function _after(TestInterface $test)
	{
		[$w, $h] = explode('x', $this->config['window_size']);
		$this->resizeWindow((int)$w, (int)$h);
		$this->webDriver->manage()->deleteAllCookies();
		return parent::_after($test);
	}
}
