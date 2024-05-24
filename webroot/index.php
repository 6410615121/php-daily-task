<?php
require_once('./db_model.php');

$tasks = get_all_tasks();

require_once('./index_view.php');

