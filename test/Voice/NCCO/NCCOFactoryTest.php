<?php

/**
 * Vonage Client Library for PHP
 *
 * @copyright Copyright (c) 2016-2020 Vonage, Inc. (http://vonage.com)
 * @license https://github.com/Vonage/vonage-php-sdk-core/blob/master/LICENSE.txt Apache License 2.0
 */

declare(strict_types=1);

namespace VonageTest\Voice\NCCO;

use InvalidArgumentException;
use VonageTest\VonageTestCase;
use Vonage\Voice\NCCO\NCCOFactory;

class NCCOFactoryTest extends VonageTestCase
{
    public function testThrowsExceptionWithBadAction(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Unknown NCCO Action foo");

        $factory = new NCCOFactory();
        $factory->build(['action' => 'foo']);
    }
}
