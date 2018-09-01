<?php
/**
 * Created by PhpStorm.
 * User: alekc
 * Date: 29.08.2018
 * Time: 23:36
 */

namespace Controllers;


class PageController
{
    public static function index()
    {
        return self::prepareResponse('123');
    }

    public static function prepareResponse($content)
    {
        $response = '';
//        $response .= prepareHead();
//        $response .= prepareHeader();
//        $response .= $this->prepareBody($content);
//        $response .= prepareFooter();

        return $response;
    }

    public static function prepareHead()
    {

    }

    public static function prepareHeader()
    {

    }

    public static  function prepareBody($content)
    {

    }

    public static function prepareFooter()
    {

    }

}