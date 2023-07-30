<?php
declare(strict_types=1);

use Orkester\Controllers\MGraphQLController;
use Slim\App;
use Slim\Psr7\Request;

return function (App $app) {

    $app->map(['GET', 'POST'], '/graphql', function (Request $req, $res) {
        $data =  (object)$req->getQueryParams();
        $body = $req->getParsedBody() ?? [];
        foreach($body as $name => $value){
            $data->$name = $value;
        }
        \Orkester\Manager::setData($data);

        $controller = new MGraphQLController($req, $res);

        \Orkester\Persistence\PersistenceManager::beginTransaction();
        $content = $controller->execute();
        \Orkester\Persistence\PersistenceManager::rollback();
        return $controller->send($content, 200);
    });

};
