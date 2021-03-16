<?php


class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function loadRoutes($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $route)
    {
        $this->routes['GET'][$uri] = $route;
    }

    public function post($uri, $route)
    {
        $this->routes['POST'][$uri] = $route;
    }

    public function direct($uri, $requestMethod)
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            try {
                return $this->callAction(
                    ...explode('@', $this->routes[$requestMethod][$uri])
                );
            } catch (Exception $exception) {
                $exception->getMessage();
            }
        }
    }

    public function callAction($controller, $action)
    {
        $newController = (new $controller);

        if (! $newController->$action()) {
            throw new Exception('Something went wrong');
        }

        return $newController->$action();
    }
}
