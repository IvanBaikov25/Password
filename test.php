<?php
namespace Baikov\Work12;
use Baikov\Work12\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    /**
     * @dataProvider passwordProvider
     */
    public function testValidate(string $password, bool $expected)
    {
        $this->assertEquals($expected, PasswordValidator::validate($password));
    }

    public function passwordProvider(): array
    {
        return [
            ['Password1', true],
            ['password', false], 
            ['PASSWORD', false], 
            ['Pass1', false],    
            ['Pass word1', false], 
            ['ValidPass123', true],
            ['12345678', false],  
            ['NoDigitsHere!', false], 
            ['Valid1Password', true],
            ['AnotherValid1', true],
            ['Short1', false], 
        ];
    }
}
