<?php
/**
 * BadCharacterHumaniser.php
 *
 * BadCharacterHumaniser class
 *
 * php 7.4+
 *
 * @category  None
 * @package   Floor9design\CharacterHumaniser\Models
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @version   0.0.1
 * @link      https://www.floor9design.com
 * @see       \Floor9design\CharacterHumaniser\Models\CharacterHumaniser
 * @see       https://en.wikipedia.org/wiki/NATO_phonetic_alphabet
 * @see       https://owasp.org/www-community/password-special-characters
 * @since     File available since pre-release development cycle
 *
 */

namespace Floor9design\CharacterHumaniser\Models;

use Floor9design\CharacterHumaniser\Exceptions\CharacterHumaniserException;

/**
 * Class BadCharacterHumaniser
 *
 * Class to offer comedy/stupid versions of the CharacterHumaniser responses
 *
 * @category  None
 * @package   Floor9design\CharacterHumaniser\Models
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @version   0.0.1
 * @link      https://www.floor9design.com
 * @see       \Floor9design\CharacterHumaniser\Models\CharacterHumaniser
 * @since     File available since pre-release development cycle
 */
class BadCharacterHumaniser extends CharacterHumaniser
{
    // Properties

    /**
     * @var array<array<string>> A non-phonetic version of the nato phonetic alphabet:
     */
    protected array $nato_letters = [
        ['char' => 'a', 'name' => 'aether'],
        ['char' => 'b', 'name' => 'bdellium'],
        ['char' => 'c', 'name' => 'czar'],
        ['char' => 'd', 'name' => 'djent'],
        ['char' => 'e', 'name' => 'ewe'],
        ['char' => 'f', 'name' => 'phonetic'], // needs work
        ['char' => 'g', 'name' => 'gnat'],
        ['char' => 'h', 'name' => 'honour'],
        ['char' => 'i', 'name' => 'igor'],
        ['char' => 'j', 'name' => 'jalapeño'],
        ['char' => 'k', 'name' => 'knife'],
        ['char' => 'l', 'name' => 'llanelli'],
        ['char' => 'm', 'name' => 'mneumonic'],
        ['char' => 'n', 'name' => 'nguyen'],
        ['char' => 'o', 'name' => 'oestrogen'],
        ['char' => 'p', 'name' => 'pneumatic'],
        ['char' => 'q', 'name' => 'quiche'],
        ['char' => 'r', 'name' => 'rzeznix'],
        ['char' => 's', 'name' => 'sgraffitto'],
        ['char' => 't', 'name' => 'tsunami'],
        ['char' => 'u', 'name' => 'uakari'],
        ['char' => 'v', 'name' => 'vundabar'], // needs work
        ['char' => 'w', 'name' => 'wrap'],
        ['char' => 'x', 'name' => 'xylophone'],
        ['char' => 'y', 'name' => 'you'],
        ['char' => 'z', 'name' => 'zaragoza']
    ];

    /**
     * @see https://en.wikipedia.org/wiki/List_of_British_bingo_nicknames
     * @var array<array<string>> Bingo numbers
     */
    protected array $numbers = [
        ['char' => '1', 'name' => 'kelly\'s eye'],
        ['char' => '2', 'name' => 'one little duck'],
        ['char' => '3', 'name' => 'cup of tea'],
        ['char' => '4', 'name' => 'knock at the door'],
        ['char' => '5', 'name' => 'man alive'],
        ['char' => '6', 'name' => 'half a dozen'],
        ['char' => '7', 'name' => 'lucky'],
        ['char' => '8', 'name' => 'one fat lady'],
        ['char' => '9', 'name' => 'doctor\'s orders'],
        ['char' => '0', 'name' => 'nowt']
    ];

    /**
     * @var array<array<string>> Symbols that are used in computing, such as passwords
     */
    protected array $symbols = [
        ['char' => ' ', 'name' => 'gap'],
        ['char' => '!', 'name' => 'shouting'],
        ['char' => '"', 'name' => 'double dash'],
        ['char' => '#', 'name' => 'twitter'],
        ['char' => '$', 'name' => 'benjamins'],
        ['char' => '%', 'name' => 'wildcard'],
        ['char' => '&', 'name' => 'and'],
        ['char' => "'", 'name' => 'apostrophe'],
        ['char' => '(', 'name' => 'left round bracket'],
        ['char' => ')', 'name' => 'right round bracket'],
        ['char' => '*', 'name' => 'multiply'],
        ['char' => '+', 'name' => 'add'],
        ['char' => ',', 'name' => 'list'],
        ['char' => '-', 'name' => 'dash'],
        ['char' => '.', 'name' => 'dot'],
        ['char' => '/', 'name' => 'right slash'],
        ['char' => ':', 'name' => 'double dot'],
        ['char' => ';', 'name' => 'end of line'],
        ['char' => '<', 'name' => 'left beak'],
        ['char' => '=', 'name' => 'innit'],
        ['char' => '>', 'name' => 'right beak'],
        ['char' => '?', 'name' => 'eh'],
        ['char' => '@', 'name' => 'a'],
        ['char' => '[', 'name' => 'left box'],
        ['char' => '\\', 'name' => 'the other slash'],
        ['char' => ']', 'name' => 'right box'],
        ['char' => '^', 'name' => 'happy eye'],
        ['char' => '_', 'name' => 'the other dash'],
        ['char' => '`', 'name' => 'dirty screen'],
        ['char' => '{', 'name' => 'left squiggly bracket'],
        ['char' => '|', 'name' => 'weird upright dash'],
        ['char' => '}', 'name' => 'right squiggly bracket'],
        ['char' => '~', 'name' => 'squiggle'],
    ];
}