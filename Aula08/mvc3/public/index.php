<?php

require_once '../config/config.php';
require_once '../autoload.php';

use Controller\Controller;

(new Controller()) -> run();