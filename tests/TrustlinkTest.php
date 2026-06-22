<?php
/**
 * Tests for TrustLink
 */

use PHPUnit\Framework\TestCase;
use Trustlink\Trustlink;

class TrustlinkTest extends TestCase {
    private Trustlink $instance;

    protected function setUp(): void {
        $this->instance = new Trustlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
