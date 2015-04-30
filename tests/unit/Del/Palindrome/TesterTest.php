<?php
namespace Del\Palindrome;


class TesterTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var Tester
     */
    protected $palindrome_tester;


    protected function _before()
    {
        $this->palindrome_tester = new Tester();
    }

    protected function _after()
    {
    }

    // tests
    public function testPalindromeReturnsTrue()
    {
        $this->assertTrue($this->palindrome_tester->isPalindrome('mum'));
        $this->assertTrue($this->palindrome_tester->isPalindrome('dad'));
        $this->assertTrue($this->palindrome_tester->isPalindrome('radar'));
        $this->assertTrue($this->palindrome_tester->isPalindrome('omemsahibbartrabbihasmemo'));
    }

    public function testNonPalindromeReturnsFalse()
    {
        $this->assertFalse($this->palindrome_tester->isPalindrome('thisshouldfail'));
        $this->assertFalse($this->palindrome_tester->isPalindrome('definitelynotapalindrome'));
        $this->assertFalse($this->palindrome_tester->isPalindrome('myfaverockbandis'));
        $this->assertFalse($this->palindrome_tester->isPalindrome('ironmaiden'));
    }

    public function testNonStringThrowsException()
    {
        $this->setExpectedException('Exception');
        $this->palindrome_tester->isPalindrome(array('crash' => 'bang'));
        $this->palindrome_tester->isPalindrome(new \DateTime());
        $this->palindrome_tester->isPalindrome(135);
    }

}