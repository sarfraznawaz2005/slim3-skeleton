<?php
namespace App\Action;

final class HomeAction
{
    private $view;
    private $logger;

    public function __construct($view, $logger)
    {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function dispatch($request, $response, $args)
    {
        //$this->logger->info("Home page action dispatched");

        $data['title'] = 'Slim 3';
        $this->view->render($response, 'home.twig', $data);

        return $response;
    }
}
