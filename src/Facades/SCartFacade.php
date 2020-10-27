<?php
namespace SaberSmesem\SCart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SCartFacade
 * @package SaberSmesem\SCart
 */
class SCartFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shoppingcart';
    }
}
