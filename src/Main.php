<?php
/**
 * Created by PhpStorm.
 * User: omer
 * Date: 2019-04-12
 * Time: 10:35
 */

namespace Webuti\SslCheck;

use Webuti\SslCheck\Request\Socket;

/**
 * Class SslCheck
 * @package Webuti
 */
class Main
{
    /**
     * @var array
     */
    public $socketData = [];

    /**
     * SslCheck constructor.
     * @param $domain
     */
    function __construct($domain)
    {
        $this->socketData = Socket::get($domain);
    }

    /**
     * @return mixed
     */
    function getRemainingDay()
    {
        $now = new \DateTime();
        return $now->diff($this->getRemainingDate())->days;
    }

    /**
     * @return DateTime
     */
    function getRemainingDate()
    {
        return new \DateTime("@" . $this->socketData['validTo_time_t']);
    }

    /**
     * @return array
     */
    function getData()
    {
        return $this->socketData;
    }
}