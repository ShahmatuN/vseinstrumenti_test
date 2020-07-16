<?php
namespace Page\Acceptance;

class HomePage
{
	public const SEARCH_FIELD = '#what';
	public const SEARCH_SUBMIT_BUTTON = '.searchSubmit';
	public const SEARCH_ITEM = 'Шуруповерты';
	public const SEARCH_MENU_ITEM = 'li:nth-child(1) > a > b';

	//CALL BACK FUNCTIONALITY
	public const FIELD_NAME = '#feedback-call-name';
	public const FIELD_PHONE = '#feedback-call-phone';
	public const SUBMIT_BUTTON = '#feedback-call-submit';
	public const SUCCESS_POPUP = '.success-text';
}
