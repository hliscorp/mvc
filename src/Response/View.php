<?php

namespace Lucinda\MVC\Response;

/**
 * Compiles criterias that will be used in generating response body
 */
class View implements \ArrayAccess
{
    private $file;
    /**
     * @var array<int|string,mixed>
     */
    private $data = [];

    /**
     * Sets path to template that will be the foundation of view
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Sets path to template that will be the foundation of view
     *
     * @param string $path
     */
    public function setFile(string $path): void
    {
        $this->file = $path;
    }

    /**
     * Gets path to template that will be the foundation of view
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * Gets data that will be bound to template or will become the view itself.
     *
     * @return array<int|string,mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Checks if value was sent to view by offset
     *
     * @param  mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    /**
     * Gets value sent to view by offset or null if offset not found
     *
     * @param  mixed $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return ($this->data[$offset] ?? null);
    }

    /**
     * Sets value to view by offset
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value): void
    {
        $this->data[$offset] = $value;
    }

    /**
     * Removes value from view by offset
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }
}