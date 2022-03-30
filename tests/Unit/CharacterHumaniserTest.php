<?php
/**
 * CharacterHumaniserTest.php
 *
 * CharacterHumaniserTest class
 *
 * php 7.4+
 *
 * @category  None
 * @package   Floor9design\CharacterHumaniser\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/json-api-formatter
 * @link      https://floor9design.com
 * @since     File available since Release 1.0
 *
 */

namespace Floor9design\CharacterHumaniser\Tests\Unit;

use Floor9design\CharacterHumaniser\Exceptions\CharacterHumaniserException;
use Floor9design\CharacterHumaniser\Models\CharacterHumaniser;
use PHPUnit\Framework\TestCase;

/**
 * CharacterHumaniserTest
 *
 * This test file tests the CharacterHumaniser.
 *
 * @category  None
 * @package   Floor9design\CharacterHumaniser\Tests\Unit
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @version   1.0
 * @link      https://github.com/floor9design-ltd/json-api-formatter
 * @link      https://floor9design.com
 * @since     File available since Release 1.0
 */
class CharacterHumaniserTest extends TestCase
{
    // Accessors

    /**
     * Test accessors.
     *
     * @return void
     */
    public function testContentTypeAccessors()
    {
        $character_humaniser = new CharacterHumaniser();

        // NATO
        $this->assertIsArray(
            $character_humaniser->getNatoLetters(),
            'getNatoLetters did not return an array'
        );
        $this->assertEquals(
            $character_humaniser->getNatoLetters()[0]['name'],
            'alpha',
            'getNatoLetters did not load the correct value'
        );

        // numbers
        $this->assertIsArray(
            $character_humaniser->getNumbers(),
            'getNumbers did not return an array'
        );
        $this->assertEquals(
            $character_humaniser->getNumbers()[2]['name'],
            'three',
            'getNumbers did not load the correct value'
        );

        // symbols
        $this->assertIsArray(
            $character_humaniser->getSymbols(),
            'getSymbols did not return an array'
        );
        $this->assertEquals(
            $character_humaniser->getSymbols()[3]['name'],
            'number sign (hash)',
            'getSymbols did not load the correct value'
        );
    }

    /**
     * Test humaniseToArray().
     *
     * @return void
     * @throws CharacterHumaniserException
     */
    public function testHumaniseToArray()
    {
        $character_humaniser = new CharacterHumaniser();
        $test_string = 'aA3~';
        $expected_array = [
            'alpha',
            'ALPHA',
            'three',
            'tilde'
        ];
        $processed = $character_humaniser->humaniseToArray($test_string);

        $this->assertIsArray(
            $processed,
            'humaniseToArray did not return an array'
        );

        $this->assertSame(
            $processed[0],
            $expected_array[0],
            'humaniseToArray did not correctly process an element'
        );

        $this->assertSame(
            $processed[1],
            $expected_array[1],
            'humaniseToArray did not correctly process an element'
        );

        $this->expectException(CharacterHumaniserException::class);
        $this->expectExceptionMessage('Not all characters could be processed: €');
        $test_string = 'aA3~€';
        $character_humaniser->humaniseToArray($test_string);
    }

    /**
     * Test humaniseToArray().
     *
     * @return void
     * @throws CharacterHumaniserException
     */
    public function testHumaniseToString()
    {
        $character_humaniser = new CharacterHumaniser();
        $test_string = 'aA3~';
        $expected_string = 'alpha ALPHA three tilde';
        $processed = $character_humaniser->humaniseToString($test_string);

        $this->assertIsString(
            $processed,
            'humaniseToString did not return a string'
        );

        $this->assertSame(
            $expected_string,
            $processed,
            'humaniseToString did not correctly translate the string'
        );
    }
}
