<?php

namespace Site;

require_once "view.php";
require_once "model.php";

use Model\Pessoa;

$viewPessoa = new View\Pessoa();
$modelPessoa = new Model\Pessoa();

$data = new \DateTime();
print_r($data);