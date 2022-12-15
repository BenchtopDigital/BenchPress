<?php

namespace Benchpress\Collections;

use Benchpress\Exceptions\InvalidArgumentException;

interface IDictionary extends \IteratorAggregate, \Countable
{
    /**
     * Returns the type of the dictionary's keys.
     *
     * @return string
     */
    public function getKeyType(): string;

    /**
     * Returns the type of the dictionary's values.
     *
     * @return string
     */
    public function getValueType(): string;

    /**
     * Returns true if $key is in the dictionary, returns false if it is not.
     *
     * @param $key
     * @return bool
     */
    public function exists($key): bool;

    /**
     * Returns true if the callable returns true. The callable should accept a
     * key and value as arguments and return a boolean.
     *
     * @param callable $callable
     * @return bool
     */
    public function contains(callable $callable): bool;

    /**
     * Returns the value associated with $key.
     *
     * @param mixed $key
     * @return mixed
     */
    public function get(mixed $key): mixed;

    /**
     * Removes the key-value pair represented by $key from the dictionary.
     *
     * @param mixed $key
     * @return IDictionary|static
     */
    public function delete(mixed $key): IDictionary|static;

    /**
     * Returns true if $value is in the dictionary, returns false if not.
     *
     * @param $value
     * @return bool
     */
    public function valueExists($value): bool;

    /**
     * Returns the number of key-value pairs in the dictionary.
     *
     * @return int
     */
    public function count(): int;

    /**
     * Removes every key-value pair from the dictionary.
     *
     * @return IDictionary|static
     */
    public function clear(): IDictionary|static;

    /**
     * Returns the key-value pairs in the dictionary as an associative array.
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Returns a dictionary that only contains the key-value pairs which satisfy
     * $condition.
     *
     * @param callable $condition
     * @return IDictionary|static
     */
    public function filter(callable $condition): IDictionary|static;

    /**
     * Removes all key-value pairs from the Dictionary that do not satisfy
     * $condition.
     *
     * @param callable $condition
     * @return IDictionary|static
     */
    public function without(callable $condition): IDictionary|static;

    /**
     * Adds the key-value pair containing $key and $value to the dictionary.
     *
     * @param $key
     * @param $value
     * @return IDictionary|static
     * @throws InvalidArgumentException
     */
    public function add($key, $value): IDictionary|static;

    /**
     * Applies the callback function $callable to each key-value pair in the
     * dictionary.
     *
     * @param callable $callable
     */
    public function each(callable $callable);

    /**
     * Returns the value associated with $key in the dictionary, returns
     * $default if it does not.
     *
     * @param $key
     * @param $default
     * @return mixed
     */
    public function getOrElse($key, $default): mixed;

    /**
     * Returns an array of all keys in the dictionary.
     *
     * @return array
     */
    public function keys(): array;

    /**
     * Returns an array of all values in the dictionary.
     *
     * @return array
     */
    public function values(): array;

    /**
     * Returns a new dictionary with the callback function $callable applied to
     * every key-value pair in the dictionary.
     *
     * @param callable $callable
     * @return IDictionary|static
     */
    public function map(callable $callable): IDictionary|static;

    /**
     * Adds every key-value pair in $newItems to the dictionary.
     *
     * @param $newItems
     * @return IDictionary|static
     */
    public function merge($newItems): IDictionary|static;


    /**
     * Reduce the dictionary to a single value. The callable should contain args: carry, key, value
     *
     * @param callable $callable
     * @param mixed $initial
     * @return mixed
     */
    public function reduce(callable $callable, mixed $initial): mixed;
}