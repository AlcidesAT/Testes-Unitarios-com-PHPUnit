<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';
class FuncoesTest extends TestCase
{
    // isEven
    public function testIsEvenWithEvenNumber()
{
    $this->assertFalse(Funcoes::isEven(4)); // Errado de propósito!
}

    public function testIsEvenWithOddNumber()
    {
        $this->assertFalse(Funcoes::isEven(3));
    }

    // factorial
    public function testFactorialWithPositiveNumber()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialWithZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialWithNegativeNumber()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-3);
    }

    // isPalindrome
    public function testIsPalindromeWithPalindromeString()
    {
        $this->assertTrue(Funcoes::isPalindrome('A man, a plan, a canal, Panama'));
    }

    public function testIsPalindromeWithNonPalindromeString()
    {
        $this->assertFalse(Funcoes::isPalindrome('hello'));
    }

    // fahrenheitToCelsius
    public function testFahrenheitToCelsius()
{
    // Isso aqui está propositalmente errado (deve ser 0)
    $this->assertEquals(5, Funcoes::fahrenheitToCelsius(32));
}

    // calculateDiscount
    public function testCalculateDiscountWithValidValues()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountWithNegativePrice()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }

    public function testCalculateDiscountWithNegativePercent()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }
}