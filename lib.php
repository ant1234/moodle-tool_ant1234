<?php

/**
 * Adds a ant1234 link to the course admin menu.
 *
 * @param navigation_node $navigation The navigation node to extend
 * @param stdClass $course The course to object for the tool
 * @param context $context The context of the course
 * @return void|null return null if we don't want to display the node.
 */
function tool_ant1234_extend_navigation_course($navigation, $course, $context) {
    $navigation->add(
      get_string('pluginname', 'tool_ant1234'),
      new moodle_url('/admin/tool/ant1234/index.php', ['id' => $course->id]),
      navigation_node::TYPE_SETTING,
      get_string('pluginname', 'tool_ant1234'),
      'todolist',
      new pix_icon('icon', '', 'tool_ant1234'));
  }
