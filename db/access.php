<?php

$capabilities = [
    'tool/ant1234:view' => [
        'riskbitmask' => RISK_SPAM,
        'captype' => 'read',e is a ‘read’ w
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => [
            'guest'          => CAP_PREVENT,
            'student'        => CAP_ALLOW,
            'teacher'        => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        ]
    ],
    'tool/ant1234:edit' => [
        'riskbitmask' => RISK_SPAM,
        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => [
            'guest'          => CAP_PREVENT,
            'student'        => CAP_PREVENT,
            'teacher'        => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        ]
    ]
 ];