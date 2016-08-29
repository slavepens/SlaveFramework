<?php

namespace Minimal;

/**
 * Class Call
 * @package Minimal
 */
class Call
{
    /**
     * Allowed method GET|POST|PUT|PATCH|HEAD|OPTIONS|CONNECT|CLI
     * In CLI Engine this parameter will be ignored.
     * @var string
     */
    public $method;

    /**
     * Call pattern
     * @var string
     */
    public $pattern;

    /**
     * Controller and method to launch.
     * @var string
     */
    public $controller;

    /**
     * Call parameters
     * @var array
     */
    public $parameters = array();

    /**
     * View type
     * @var null|string
     */
    public $view;

    /**
     * Route constructor.
     * @param string $pattern
     * @param string $controller
     * @param string $method
     * @param string $view
     */
    public function __construct($pattern, $controller, $method = 'GET', $view = null)
    {
        $this->pattern = trim($pattern, '/');
        $this->controller = $controller;
        $this->method = strtoupper($method);
        $this->view = $view;
    }
}