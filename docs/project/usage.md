# Usage

## Basic functionality

The class is fairly simple to use:

```php
// include the class however you see fit:
use Floor9design\CharacterHumaniser\Models\CharacterHumaniser;

// instantiate it how you see fit:
$character_humaniser = new CharacterHumaniser();

// Example password string: 
$password = 'hDst5$d';

// Output a string, specifying a comma as a separator:
echo $character_humaniser->humaniseToString($password, ', ');
// Outputs: 'hotel, DELTA, sierra, tango, five, dollar sign, delta';

// The same can be output as an array (for list purposes etc)
$array = $character_humaniser->humaniseToArray($password);
// array = ['hotel', 'DELTA', 'sierra', 'tango', 'five', 'dollar sign', 'delta']
```

Unexpected symbols (eg `€`) throw a `CharacterHumaniserException`, listing the unexpected characters.

## Adding your own definitions

To add custom definitions, you can use the `setCustom()` functionality as follows:

```php
use Floor9design\CharacterHumaniser\Models\CharacterHumaniser;
$character_humaniser = new CharacterHumaniser();

// an array of all value/definitions:
$custom_characters = [
    // each value/definitions is an array of 'char' => 'name' pairs
    ['char' => '€', 'name' => 'Euro symbol']
];

$test_string = 'aA3~€';
$processed = $character_humaniser->humaniseToString($test_string);
// 'alpha ALPHA three tilde Euro symbol'
```

## BadCharacterHumaniser

For a joke/april fools, the `BadCharacterHumaniser` class can also be used. This has deliberately confusing phrases and
definitions to give a comedic answer. It uses deliberately misleading phonetic sounds (eg: knife = k), bingo definitions
(cup of tea = three), and vague or incorrect symbol definitions (benjamins = $).

```php
// include the class however you see fit:
use Floor9design\CharacterHumaniser\Models\BadCharacterHumaniser;

// instantiate it how you see fit:
$bad_character_humaniser = new BadCharacterHumaniser();

// Example password string: 
$password = '$aX3k';

// Output a string, specifying a comma as a separator:
echo $bad_character_humaniser->humaniseToString($password, ', ');
// Outputs: 'benjamins, aether, XYLOPHONE, cup of tea, knife';

```