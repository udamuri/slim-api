<?php
// Routes

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// })->add($basic_auth);

$app->get('/employee', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT * FROM employee");
    $sth->execute();
    $todos = $sth->fetchAll();
    return $this->response->withJson($todos);
    // Render index view
    return json_encode($arrData);
});
