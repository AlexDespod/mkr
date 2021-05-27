<?php
namespace Tests;

use App\Subject;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new Subject("programming");
    }

    public function markTest()
    {
        $this->assertTrue($this->subject->getMarkSummAtOnes("alex") == 27);
        $this->assertTrue($this->subject->getMarkSummAtOnes("alex") == 20);
    }
}
