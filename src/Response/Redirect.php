<?php

namespace Lucinda\MVC\Response;

use Lucinda\MVC\Runnable;

/**
 * Redirects to a new location
 */
class Redirect implements Runnable
{
    private $permanent = true;
    private $preventCaching = false;
    private $location;

    /**
     * Sets URL to redirect to
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
    }

    /**
     * Sets whether redirection is permanent
     *
     * @param  bool $flag
     * @return void
     */
    public function setPermanent(bool $flag): void
    {
        $this->permanent = $flag;
    }

    /**
     * Sets whether browsers should prevent caching redirection
     *
     * @param  bool $flag
     * @return void
     */
    public function setPreventCaching(bool $flag): void
    {
        $this->preventCaching = $flag;
    }

    /**
     * Executes redirection logic
     *
     * @return void
     */
    public function run(): void
    {
        if ($this->preventCaching) {
            header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
            header("Pragma: no-cache");
            header("Expires: 0");
        }
        header('Location: '.$this->location, true, ($this->permanent ? 301 : 302));
        exit();
    }
}