<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Martin Madsen <crakter@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\BringApi\DefaultData;

use PHPUnit\Framework\TestCase;
use Crakter\BringApi\Exception\InputValueNotAllowedException;

class ClientUrlsTest extends TestCase
{
    public function testHasConstant()
    {
        $this->assertTrue(ClientUrls::has('REPORTS_LIST_AVAILABLE_CUSTOMERS'), 'Test has trait on class');
    }

    public function testHasNotConstant()
    {
        $this->assertFalse(ClientUrls::has('REPORTS_LIST_AVAILABLE_CUSTOMERS_ALL'), 'Test has trait on class');
    }

    public function testGetConstantException()
    {
        $this->expectException(InputValueNotAllowedException::class);
        ClientUrls::get('REPORTS_LIST_AVAILABLE_CUSTOMERS_ALL');
    }
}
