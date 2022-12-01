<?php

use Lincon\Sql\Controller\Cadrastros;

$rotas = [

    '/GetCadrastro' => Cadrastros::class,
    '/PostCadrastro' => NewCadrastro::class,
    '/EditCadrastro' => EditCadrastro::class
];



return $rotas;

