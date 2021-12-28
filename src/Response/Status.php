<?php
namespace Lucinda\MVC\Response;

use Lucinda\MVC\ConfigurationException;

/**
 * Encapsulates HTTP response status logic in accordance to HTTP/1.1 specifications
 */
class Status
{
    private int $id;
    private string $description;

    /**
     * Sets response HTTP status by its numeric code
     *
     * @param HttpStatus $status
     */
    public function __construct(HttpStatus $status)
    {
        $space = strpos($status->value, " ");
        $this->id = (int) substr($status->value, 0, $space);
        $this->description = substr($status->value, $space+1);
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
