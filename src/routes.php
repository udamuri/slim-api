<?php
// Routes

$app->get('/home', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("lado-api '/' home");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/api/employee', function ($request, $response, $args) {
	$this->logger->info("lado-api '/' tes query employee");
    $sth = $this->db->prepare("SELECT * FROM employee");
    $sth->execute();
    $todos = $sth->fetchAll();
    return $this->response->withJson($todos);
});
