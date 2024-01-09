<?php declare(strict_types=1);

namespace Hardcastle\XRPL_PHP\Test\Core;

use PHPUnit\Framework\TestCase;
use Hardcastle\XRPL_PHP\Core\CoreUtilities;

final class UtilitiesTest extends TestCase
{
    public function testSingletonUniqueness(): void
    {
        $firstCall = CoreUtilities::getInstance();
        $secondCall = CoreUtilities::getInstance();

        $this->assertInstanceOf(CoreUtilities::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}