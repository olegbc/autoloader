<?php

namespace lib;

use lib\application;

class ApplicationSome
{
    const ONETWOTHREE = 123;

    public function __toString()
    {
        $print = new application\Controller();
        $print->printSome();

        return 'Ok';
    }
}