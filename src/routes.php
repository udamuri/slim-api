<?php
// Routes
$app->get('/employee', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT * FROM employee");
    $sth->execute();
    $todos = $sth->fetchAll();
    return $this->response->withJson($todos);
});
