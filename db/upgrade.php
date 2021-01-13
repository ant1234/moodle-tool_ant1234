<?php
 
function xmldb_tool_ant1234_upgrade($oldversion) {
    global $CFG;
 
    $result = TRUE;
 
    // Insert PHP code from XMLDB Editor here
    if ($oldversion < 2021011205) {

        // Define field id to be added to tool_ant1234.
        $table = new xmldb_table('tool_ant1234');
        $field = new xmldb_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null, null);

        // Conditionally launch add field id.
        // if (!$dbman->field_exists($table, $field)) {
        //     $dbman->add_field($table, $field);
        // }

        // Ant1234 savepoint reached.
        upgrade_plugin_savepoint(true, 2021011205, 'tool', 'ant1234');
    }
 
    return $result;
}
?>