<?php
namespace Apsg\Dafetcher;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Apsg\Dafetcher\Dafetcher
 */
class DafetcherFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dafetcher';
    }
}
