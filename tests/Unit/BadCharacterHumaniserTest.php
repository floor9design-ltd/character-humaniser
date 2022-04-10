<?php
/**
 * BadCharacterHumaniserTest.php
 *
 * BadCharacterHumaniserTest class
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
use Floor9design\CharacterHumaniser\Models\BadCharacterHumaniser;
use PHPUnit\Framework\TestCase;

/**
 * BadCharacterHumaniserTest
 *
 * This test file tests the BadCharacterHumaniser.
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
class BadCharacterHumaniserTest extends TestCase
{
    /**
     * Test humaniseToString().
     *
     * @return void
     * @throws CharacterHumaniserException
     */
    public function testHumaniseToString()
    {
        $character_humaniser = new BadCharacterHumaniser();
        $test_string = 'aA3~';
        $expected_string = 'aether AETHER cup of tea squiggle';
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
