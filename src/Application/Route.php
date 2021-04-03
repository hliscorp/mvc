<?php
namespace Lucinda\MVC\Application;

/**
 * Encapsulates an abstract route
 */
class Route
{
    private $controller;
    private $view;
    
    /**
     * Detects route info from <exception> tag
     *
     * @param \SimpleXMLElement $info
     */
    public function __construct(\SimpleXMLElement $info)
    {
        $this->controller = (string) $info["controller"];
        $this->view = (string) $info["view"];
    }

    /**
     * Gets controller class name that handles exception handled.
     *
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * Gets file that holds what is displayed when error response is rendered.
     *
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }
}
