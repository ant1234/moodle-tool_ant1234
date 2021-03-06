<?php

require_once(__DIR__ . '/../../../config.php');

require_login();
require_capability('tool/ant1234:view');

$url = new moodle_url('/admin/tool/ant1234/index.php');
$PAGE->set_context(context_system::instance());
$PAGE->set_url($url);
$PAGE->set_pagelayout('report');


$PAGE->set_title('Hello to the todo list');
$PAGE->set_heading(get_string('pluginname', 'tool_ant1234'));

$output = $OUTPUT;

echo $output->header();

$greeting = get_string('display', 'tool_ant1234');

$course_id = $PAGE->course->id;
$course_info = $DB->get_record('course', ['id' => $course_id]);

var_dump($course_info);

echo html_writer::div(format_text($greeting), '', array('id' => 'course')); // Used for multil-line rich-text contents such as forum post body.

echo $output->footer();

