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
     * @param HttpStatus|int $status
     * @throws ConfigurationException If incorrect numeric code is supplied.
     */
    public function __construct($status)
    {
        $validatedStatus = $this->validate($status);

        $position = strpos($validatedStatus, " ");
        $this->id = (int) substr($validatedStatus, 0, $position);
        $this->description = substr($validatedStatus, $position+1);
    }

    /**
     * Validates HTTP status with constants of HttpStatus enum
     *
     * @param HttpStatus|int $status
     * @return HttpStatus
     * @throws ConfigurationException
     */
    private function validate($status): string
    {
        $reflectionClass = new \ReflectionClass(HttpStatus::class);
        $possibleStatuses = $reflectionClass->getConstants();
        if (is_int($status)) {
            $completeStatus = "";
            foreach ($possibleStatuses as $statusText) {
                if (strpos($statusText, $status." ")===0) {
                    $completeStatus = $statusText;
                }
            }
            if (!$completeStatus) {
                throw new ConfigurationException("Unsupported HTTP status code: ".$status);
            }
            return $completeStatus;
        } else if (!in_array($status, $possibleStatuses)) {
            throw new ConfigurationException("Unsupported HTTP status: ".$status);
        }
        return $status;
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
