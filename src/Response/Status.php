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
     * Sets response HTTP status by its numeric code
     *
     * @param integer $code
     * @throws ConfigurationException If incorrect numeric code is supplied.
     */
    public function __construct(int $code)
    {
        $reflectionClass = new \ReflectionClass(HttpStatus::class);
        $httpStatuses = $reflectionClass->getConstants();
        foreach ($httpStatuses as $status) {
            if (strpos($status, $code)===0) {
                $position = strpos($status, " ");
                $this->id = (int) substr($status, 0, $position);
                $this->description = substr($status, $position+1);
            }
        }
        if (!$this->id) {
            throw new ConfigurationException("Unsupported HTTP status: ".$code);
        }
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
