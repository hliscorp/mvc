<?php
namespace Lucinda\MVC;

use Lucinda\MVC\Application\Format;
use Lucinda\MVC\Application\Route;

/**
 * Detects settings necessary to configure MVC API based on contents of XML file and development environment:
 * - default content types of rendered response
 * - location of controllers that map exceptions thrown
 * - location of views that map exceptions thrown
 * - possible objects to use in reporting error to
 * - possible objects to use in rendering response
 * - possible routes that map controllers/views to exception
 */
abstract class Application
{
    protected $simpleXMLElement;
    
    protected $controllersPath;
    protected $viewsPath;
    protected $viewResolversPath;
    
    protected $defaultFormat;
    
    protected $version;
    
    protected $routes=array();
    protected $resolvers=array();
    
    protected $objectsCache=array();    
    
    /**
     * Reads XML supplied
     *
     * @param string $xmlFilePath Relative location of XML file containing settings.
     * @throws ConfigurationException If XML is misconfigured.
     */
    public function readXML(string $xmlFilePath)
    {
        if (!file_exists($xmlFilePath)) {
            throw new ConfigurationException("XML file not found: ".$xmlFilePath);
        }
        $this->simpleXMLElement = simplexml_load_file($xmlFilePath);
    }
    
    /**
     * Sets basic application info based on contents of "application" XML tag:
     * - default response format
     * - controllers path
     * - views path
     * - view resolvers path
     * - version
     *
     * @throws ConfigurationException If xml content has failed validation.
     */
    abstract protected function setApplicationInfo(): void;
    
    /**
     * Gets default response display format
     *
     * @return string
     */
    public function getDefaultFormat(): string
    {
        return $this->defaultFormat;
    }
    
    /**
     * Gets path to controllers folder.
     *
     * @return string
     */
    public function getControllersPath(): string
    {
        return $this->controllersPath;
    }
    
    /**
     * Gets path to view resolvers folder.
     *
     * @return string
     */
    public function getViewResolversPath(): string
    {
        return $this->viewResolversPath;
    }
    
    /**
     * Gets path to views folder.
     *
     * @return string
     */
    public function getViewsPath(): string
    {
        return $this->viewsPath;
    }
    
    /**
     * Gets application version.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    
    /**
     * Sets view resolvers info based on contents of "resolvers" XML tag
     *
     * @throws ConfigurationException If xml content has failed validation.
     */
    abstract protected function setResolvers(): void;
    
    /**
     * Gets content of tag format encapsulated as Format objects
     *
     * @param string $displayFormat
     * @return Format|array|null
     */
    public function formats(string $displayFormat="")
    {
        if (!$displayFormat) {
            return $this->resolvers;
        } else {
            return (isset($this->resolvers[$displayFormat])?$this->resolvers[$displayFormat]:null);
        }
    }
    
    /**
     * Sets routes info based on contents of "routes" XML tag
     *
     * @throws ConfigurationException If xml content has failed validation.
     */
    abstract protected function setRoutes(): void;
    
    /**
     * Reads content of tag routes encapsulated as Route objects
     *
     * @param string $criteria
     * @return Route|array|null
     */
    public function routes(string $criteria="")
    {
        if (!$criteria) {
            return $this->routes;
        } else {
            return (isset($this->routes[$criteria])?$this->routes[$criteria]:null);
        }
    }
    
    /**
     * Gets tag based on name from main XML root or referenced XML file if "ref" attribute was set
     *
     * @param string $name
     * @return \SimpleXMLElement
     * @throws ConfigurationException If XML is misconfigured.
     */
    public function getTag(string $name): \SimpleXMLElement
    {
        $xml = $this->simpleXMLElement->{$name};
        $xmlFilePath = (string) $xml["ref"];
        if ($xmlFilePath) {
            if (isset($this->objectsCache[$name])) {
                return $this->objectsCache[$name];
            } else {
                $xmlFilePath = $xmlFilePath.".xml";
                if (!file_exists($xmlFilePath)) {
                    throw new ConfigurationException("XML file not found: ".$xmlFilePath);
                }
                $subXML = simplexml_load_file($xmlFilePath);
                $returningXML = $subXML->{$name};
                $this->objectsCache[$name] = $returningXML;
                return $returningXML;
            }
        } else {
            return $xml;
        }
    }

    /**
     * Gets root XML tag
     *
     * @return \SimpleXMLElement
     */
    public function getXML(): \SimpleXMLElement
    {
        return $this->simpleXMLElement;
    }
}
