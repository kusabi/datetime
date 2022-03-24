<?php

return [
    'target_php_version' => 7.2,
    'directory_list' => [
        'src'
    ],
    "exclude_analysis_directory_list" => [
        'vendor/'
    ],
    'plugins' => [
        'AlwaysReturnPlugin',
        'AvoidableGetterPlugin',
        'ConstantVariablePlugin',
        'DollarDollarPlugin',
        'LoopVariableReusePlugin',
        'RedundantAssignmentPlugin',
        'RemoveDebugStatementPlugin',
        'ShortArrayPlugin',
        'SimplifyExpressionPlugin',
        'UnreachableCodePlugin',
        'UnsafeCodePlugin',
        'WhitespacePlugin',
    ],
];