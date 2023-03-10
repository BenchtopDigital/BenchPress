<?php

namespace Benchpress\Collections;

use ArrayIterator;
use Benchpress\Exceptions\InvalidArgumentException;

class Dictionary implements IDictionary
{
    use TypeValidator;

    protected array $storage = [];
    protected mixed $keyType;
    protected mixed $valType;

    /**
     * @param $keyType
     * @param $valType
     * @param array $storage
     * @throws InvalidArgumentException
     */
    public function __construct($keyType, $valType, array $storage = [])
    {
        $this->keyType = $this->determineType($keyType, true);

        $this->valType = $valType === 'mixed' ? $valType : $this->determineType($valType);

        foreach ($storage as $key => $val) {
            $this->validateItem($key, $this->keyType);

            if ($this->valType !== 'mixed') {
                $this->validateItem($val, $this->valType);
            }

            $this->storage[$key] = $val;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getKeyType(): string
    {
        return $this->keyType;
    }

    /**
     * {@inheritdoc}
     */
    public function getValueType(): string
    {
        return $this->valType;
    }

    /**
     * {@inheritdoc}
     */
    public function exists($key): bool
    {
        return array_key_exists($key, $this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key): mixed
    {
        return array_key_exists($key, $this->storage) ? $this->storage[$key] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function delete($key): static
    {
        $storage = $this->storage;
        if (array_key_exists($key, $this->storage)) {
            unset($storage[$key]);
        }

        return new static($this->keyType, $this->valType, $storage);
    }

    /**
     * {@inheritdoc}
     */
    public function valueExists($value): bool
    {
        return in_array($value, $this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator(): ArrayIterator|iterable {
        return new ArrayIterator($this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function count(): int {
        return count($this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function clear(): IDictionary|static {
        return new static($this->keyType, $this->valType);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return $this->storage;
    }

    /**
     * {@inheritdoc}
     */
    public function filter(callable $condition): IDictionary|Static {
        $storage = [];

        foreach ($this->storage as $key => $value) {
            if ($condition($key, $value)) {
                $storage[$key] = $value;
            }
        }

        return new static($this->keyType, $this->valType, $storage);
    }

    /**
     * {@inheritdoc}
     */
    public function without(callable $condition): IDictionary|Static {
        $inverse = function ($k, $v) use ($condition) {
            return !$condition($k, $v);
        };

        return $this->filter($inverse);
    }

    /**
     * {@inheritdoc}
     */
    public function add($key, $value): IDictionary|Static {
        $storage = $this->storage;
        $storage[$key] = $value;

        return new static($this->keyType, $this->valType, $storage);
    }

    /**
     * {@inheritdoc}
     */
    public function each(callable $callable)
    {
        foreach ($this->storage as $key => $value) {
            $callable($key, $value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrElse($key, $default): mixed
    {
        return ($this->exists($key)) ? $this->get($key) : $default;
    }

    /**
     * {@inheritdoc}
     */
    public function keys(): array {
        return array_keys($this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function values(): array
    {
        return array_values($this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function map(callable $callable): IDictionary|Static {
        $items = [];

        $keyType = null;
        $valType = null;

        foreach ($this->storage as $key => $val) {
            list($k,$v) = $callable($key, $val);

            if (!isset($keyType) && !isset($valType)) {
                $keyType = gettype($k);
                $valType = gettype($v);
            }

            $items[$k] = $v;
        }

        if (null === $keyType && null === $valType) {
            $keyType = $this->keyType;
            $valType = $this->valType;
        }

        return new static($keyType, $valType, $items);
    }

    /**
     * {@inheritdoc}
     */
    public function merge($newItems): IDictionary|Static {
        if ($newItems instanceof self) {
            $newItems = $newItems->toArray();
        }

        if (!is_array($newItems)) {
            throw new \InvalidArgumentException('Combine must be a Dictionary or an array');
        }

        $items = array_merge($this->storage, $newItems);

        return new static($this->keyType, $this->valType, $items);
    }


    /**
     *
     * {@inheritdoc}
     *
     * @param callable $callable
     * @return bool
     */
    public function contains(callable $callable): bool {
        foreach ($this->storage as $key => $value) {
            if ($callable($key, $value)) {
                return true;
            }
        }

        return false;
    }


    /**
     *
     * {@inheritdoc}
     */
    public function reduce(callable $callable, $initial): mixed
    {
        $carry = $initial;

        foreach ($this->storage as $key => $value) {
            $carry = $callable($carry, $key, $value);
        }

        return $carry;
    }
}