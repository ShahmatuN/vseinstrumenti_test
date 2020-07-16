<?php

namespace Page\Acceptance;

class GoodsPage
{
	public const BEST_PRICE_CART_BUTTON = '//*[contains(@class, "tile-box product")][contains(.,"Лучшая цена")]' .
	'//*[contains(@class, "addItemToBasket")]';
	public const ADD_CART_SALE_BUTTON = '.card-right-aside [data-action-id="retail_sale"].addItemToBasket';

}
