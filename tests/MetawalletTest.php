<?php
/**
 * Tests for MetaWallet
 */

use PHPUnit\Framework\TestCase;
use Metawallet\Metawallet;

class MetawalletTest extends TestCase {
    private Metawallet $instance;

    protected function setUp(): void {
        $this->instance = new Metawallet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Metawallet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
