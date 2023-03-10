# QuickArray
Work with SplFixedArray class quickly!

## Features

- Simple and Easy to use
- Due to the use of SplFixedArray, it is faster than normal array




##  Requirements

PHP >= 8.1


## Installation

via Composer:
```
composer require alirezasalehizadeh/quick-array:1.0.0
```

## Usage

#### Methods Table:

```php
$arr = new QuickArray(5);


$arr->__construct(int $size)  // Constructs a new fixed array

$arr->size():int  // Returns the size of the array

$arr->current():mixed // Return current array entry

$arr->push($index, $value)  // Push new element to QuickArray

$arr->pushArray(array $array, bool $preserveKeys = true):(new SplFixedArray)  // Import a PHP array in a SplFixedArray instance

$arr->key():int // Return current array index

$arr->next():void  // Move to next entry

$arr->exists($index):bool // Returns whether the requested index exists

$arr->get($index) // Returns the value at the specified index

$arr->set($index, $value) // Sets a new value at a specified index

$arr->unset($index) // Unsets the value at the specified $index

$arr->rewind()  // Rewind iterator back to the start

$arr->resize(int $size):bool  // Change the size of an array

$arr->toArray() // Returns a PHP array from the fixed array

$arr->valid() // Check whether the array contains more elements

$arr->__wakeup()  // Reinitialises the array after being unserialised
```

## Contributing
Send pull request or open issue for contributing.


## License

[MIT](LICENSE).
