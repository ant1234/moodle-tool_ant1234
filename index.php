<?php

require_once(__DIR__ . '/../../../config.php');
$url = new moodle_url('/admin/tool/ant1234/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');
$PAGE->set_title('Hello to the todo list');
$PAGE->set_heading(get_string('pluginname', 'tool_ant1234'));

echo get_string('display', 'tool_ant1234');
// echo get_string('healthnoproblemsfound', 'tool_ant1234');
