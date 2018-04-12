<?php
/**
 * This file contains the DatabaseDMLQueryBuilderQueryPartsWithTest class.
 *
 * PHP Version 7.0
 *
 * @package
 * @author     Koen Hengsdijk
 * @copyright  2012-2018, M2Mobi BV, Amsterdam, The Netherlands
 */


namespace TestClasses;


class SmallSingleton
{
    protected $foo;

    /**
     * SmallSingleton constructor.
     * @param $foo
     */
    public function __construct($foo)
    {
        $this->foo = $foo;
    }


}