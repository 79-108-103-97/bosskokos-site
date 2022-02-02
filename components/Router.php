<?php

class Router
{

    //Масиив роутов (маршрутов)
    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }


    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {

        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     *
     */
    public function run()
    {
        // Получиние строки запроса
        $uri = $this->getURI();
        // Проверка наличия такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            // Сравнение $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Получение внутреннего пути из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Определение контроллера, action, параметров

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                //Переадрисация в другую дирректорию при запросе админ панели
                if ($controllerName == 'AdminController') {
                    $controllerFile = ROOT . '/root/controllers/' . $controllerName . '.php';
                } else {
                    // Подключить файл класса-контроллера
                    $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                }

                //Подключение файла контроллера, если он существует
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создание объекта класса контроллера, вызов метода (т.е. action),
                //если такие не найдены,то передача управления ErrorController
                $controllerObject = new $controllerName;
                if (!method_exists($controllerObject, $actionName)) {
                    $controllerName = 'ErrorController';
                    $actionName = 'actionError';
                    $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                    include_once($controllerFile);
                    $controllerObject = new $controllerName;
                }
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
