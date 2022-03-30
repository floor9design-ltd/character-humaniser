<?php
/**
 * CharacterHumaniser.php
 *
 * CharacterHumaniser class
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
 * @see       https://en.wikipedia.org/wiki/NATO_phonetic_alphabet
 * @see       https://owasp.org/www-community/password-special-characters
 * @since     File available since pre-release development cycle
 *
 */

namespace Floor9design\CharacterHumaniser\Models;

use Floor9design\CharacterHumaniser\Exceptions\CharacterHumaniserException;

/**
 * Class CharacterHumaniser
 *
 * Class to offer nice ways to turn difficult strings into easy to read strings ideal for sharing.
 *
 * Lookup field accessors are kept public to allow referencing
 *
 * @category  None
 * @package   Floor9design\CharacterHumaniser\Models
 * @author    Rick Morice <rick@floor9design.com>
 * @copyright Floor9design Ltd
 * @license   MIT
 * @version   0.0.1
 * @link      https://www.floor9design.com
 * @since     File available since pre-release development cycle
 * @see       https://jsonapi.org/format/
 */
class CharacterHumaniser
{
    // Properties

    /**
     * @see https://en.wikipedia.org/wiki/NATO_phonetic_alphabet
     * @var array<array<string>> The nato phonetic alphabet:
     */
    protected array $nato_letters = [
        ['char' => 'a', 'name' => 'alpha'],
        ['char' => 'b', 'name' => 'beta'],
        ['char' => 'c', 'name' => 'charlie'],
        ['char' => 'd', 'name' => 'delta'],
        ['char' => 'e', 'name' => 'echo'],
        ['char' => 'f', 'name' => 'foxtrot'],
        ['char' => 'g', 'name' => 'golf'],
        ['char' => 'h', 'name' => 'hotel'],
        ['char' => 'i', 'name' => 'india'],
        ['char' => 'j', 'name' => 'juliet'],
        ['char' => 'k', 'name' => 'kilo'],
        ['char' => 'l', 'name' => 'lima'],
        ['char' => 'm', 'name' => 'mike'],
        ['char' => 'n', 'name' => 'november'],
        ['char' => 'o', 'name' => 'oscar'],
        ['char' => 'p', 'name' => 'papa'],
        ['char' => 'q', 'name' => 'quebec'],
        ['char' => 'r', 'name' => 'romeo'],
        ['char' => 's', 'name' => 'sierra'],
        ['char' => 't', 'name' => 'tango'],
        ['char' => 'u', 'name' => 'uniform'],
        ['char' => 'v', 'name' => 'victor'],
        ['char' => 'w', 'name' => 'whiskey'],
        ['char' => 'x', 'name' => 'xray'],
        ['char' => 'z', 'name' => 'zulu']
    ];

    /**
     * @var array<array<string>> The numbers
     */
    protected array $numbers = [
        ['char' => '1', 'name' => 'one'],
        ['char' => '2', 'name' => 'two'],
        ['char' => '3', 'name' => 'three'],
        ['char' => '4', 'name' => 'four'],
        ['char' => '5', 'name' => 'five'],
        ['char' => '6', 'name' => 'six'],
        ['char' => '7', 'name' => 'seven'],
        ['char' => '8', 'name' => 'eight'],
        ['char' => '9', 'name' => 'nine'],
        ['char' => '0', 'name' => 'zero']
    ];

    /**
     * @var array<array<string>> Symbols that are used in computing, such as passwords
     */
    protected array $symbols = [
        ['char' => ' ', 'name' => 'space'],
        ['char' => '!', 'name' => 'exclamation'],
        ['char' => '"', 'name' => 'double quote'],
        ['char' => '#', 'name' => 'number sign (hash)'],
        ['char' => '$', 'name' => 'dollar sign'],
        ['char' => '%', 'name' => 'percent'],
        ['char' => '&', 'name' => 'ampersand'],
        ['char' => "'", 'name' => 'single quote'],
        ['char' => '(', 'name' => 'left parenthesis'],
        ['char' => ')', 'name' => 'right parenthesis'],
        ['char' => '*', 'name' => 'asterisk'],
        ['char' => '+', 'name' => 'plus'],
        ['char' => ',', 'name' => 'comma'],
        ['char' => '-', 'name' => 'minus'],
        ['char' => '.', 'name' => 'full stop'],
        ['char' => '/', 'name' => 'slash'],
        ['char' => ':', 'name' => 'colon'],
        ['char' => ';', 'name' => 'semicolon'],
        ['char' => '<', 'name' => 'less than'],
        ['char' => '=', 'name' => 'equal sign'],
        ['char' => '>', 'name' => 'greater than'],
        ['char' => '?', 'name' => 'question mark'],
        ['char' => '@', 'name' => 'at sign'],
        ['char' => '[', 'name' => 'left bracket'],
        ['char' => '\\', 'name' => 'backslash'],
        ['char' => ']', 'name' => 'right bracket'],
        ['char' => '^', 'name' => 'caret'],
        ['char' => '_', 'name' => 'underscore'],
        ['char' => '`', 'name' => 'grave accent (backtick)'],
        ['char' => '{', 'name' => 'left brace'],
        ['char' => '|', 'name' => 'vertical bar'],
        ['char' => '}', 'name' => 'right brace'],
        ['char' => '~', 'name' => 'tilde'],
    ];

    /**
     * @return array<array<string>>
     * @see $nato_letters
     */
    public function getNatoLetters(): array
    {
        return $this->nato_letters;
    }

    /**
     * @return array<array<string>>
     * @see $numbers
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }

    /**
     * @return array<array<string>>
     * @see $symbols
     */
    public function getSymbols(): array
    {
        return $this->symbols;
    }

    /**
     * @param string $original
     * @param string $separator
     * @return string
     * @throws CharacterHumaniserException
     */
    public function humaniseToString(string $original, string $separator = ' '): string
    {
        return implode($separator, $this->humaniseToArray($original));
    }

    /**
     * @param string $original
     * @return array<string>
     * @throws CharacterHumaniserException
     */
    public function humaniseToArray(string $original): array
    {
        $humanised = [];
        $remaining = $chars = mb_str_split($original);

        foreach ($chars as $key => $char) {

            foreach ($this->getNatoLetters() as $letter) {
                // lower case
                if ($char === $letter['char']) {
                    $humanised[] = $letter['name'];
                    unset($remaining[$key]);
                } elseif (strtolower($char) === $letter['char']) {
                    $humanised[] = strtoupper($letter['name']);
                    unset($remaining[$key]);
                }
            }

            foreach ($this->getNumbers() as $number) {
                // number
                if ($char === $number['char']) {
                    $humanised[] = $number['name'];
                    unset($remaining[$key]);
                }
            }

            foreach ($this->getSymbols() as $symbol) {
                // symbol
                if ($char === $symbol['char']) {
                    $humanised[] = $symbol['name'];
                    unset($remaining[$key]);
                }
            }
        }

        // if couldn't process all:
        if (count($remaining)) {
            $message = 'Not all characters could be processed: ' . implode(', ', $remaining);
            throw new CharacterHumaniserException($message);
        }

        return $humanised;
    }

}