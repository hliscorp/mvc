<?php
namespace Lucinda\MVC\Response;

use Lucinda\MVC\ConfigurationException;

/**
 * Encapsulates HTTP response status logic in accordance to HTTP/1.1 specifications
 */
class Status
{
    private $id;
    private $description;

    /**
     * Sets response HTTP status
     *
     * @param string $status
     * @throws ConfigurationException If incorrect numeric code is supplied.
     */
    public function __construct(string $status)
    {
        $reflectionClass = new \ReflectionClass(HttpStatus::class);
        if (!in_array($status, $reflectionClass->getConstants())) {
            throw new ConfigurationException("Unsupported HTTP status: ".$status);
        }

        $position = strpos($status, " ");
        $this->id = (int) substr($status, 0, $position);
        $this->description = substr($status, $position+1);
    }

    /**
     * Gets HTTP status numeric code.
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Gets HTTP status text description code.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
