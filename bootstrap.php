<?php

ini_set('display_errors', 'on');
date_default_timezone_set('Asia/Shanghai');

define('ROOT_DIR', __DIR__);
define('FRAME_DIR', ROOT_DIR.'/frame');
define('COMMAND_DIR', ROOT_DIR.'/command');
define('QUEUE_JOB_DIR', ROOT_DIR.'/queue_job');
define('DEP_DOMAIN_DIR', ROOT_DIR.'/dep_domain');
define('DEP_CLIENT_DIR', ROOT_DIR.'/dep_client');
define('DEP_QUEUE_JOB_DIR', ROOT_DIR.'/dep_queue_job');

include FRAME_DIR.'/function.php';
include FRAME_DIR.'/otherwise.php';

config_dir(ROOT_DIR.'/config');

include ROOT_DIR.'/util/load.php';
include QUEUE_JOB_DIR.'/load.php';

include DEP_DOMAIN_DIR.'/load.php';
include DEP_CLIENT_DIR.'/load.php';
include DEP_QUEUE_JOB_DIR.'/load.php';
