<?php
/**
 * Riak PHP Client
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Apache License, Version 2.0 that is
 * bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to <marco.debo.debortoli@gmail.com> so we can send you a copy immediately.
 *
 * @category   Riak
 * @package    StringIO
 * @copyright  Copyright (c) 2012 debo <marco.debo.debortoli@gmail.com> (https://github.com/MarcoDeBortoli)
 */
namespace Basho\Riak;

/**
 * StringIO
 *
 * @category   Riak
 * @package    StringIO
 * @author     debo <marco.debo.debortoli@gmail.com> (https://github.com/MarcoDeBortoli)
 */
class StringIO
{
    public function __construct()
    {
        $this->contents = '';
    }

    public function write($ch, $data)
    {
        $this->contents .= $data;
        return strlen($data);
    }

    public function contents()
    {
        return $this->contents;
    }
}