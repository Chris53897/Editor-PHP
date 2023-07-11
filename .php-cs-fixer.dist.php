<?php

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__])
    ->exclude(['vendor']);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@PHP74Migration' => true,

        // required by PSR-12
        'concat_space' => [
            'spacing' => 'one',
        ],

        // disable some too strict rules
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
        'single_line_throw' => false,
        'yoda_style' => [
            'equal' => false,
            'identical' => false,
        ],
        'native_constant_invocation' => [
            'include' => ['SIGHUP', 'SIGINT', 'SIGQUIT', 'SIGTERM'],
        ],
        'native_function_invocation' => false,
        'void_return' => false,
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'exit'],
        ],
        'combine_consecutive_issets' => false,
        'combine_consecutive_unsets' => false,
        'multiline_whitespace_before_semicolons' => false,
        'no_superfluous_elseif' => false,
        'ordered_class_elements' => false,
        'php_unit_internal_class' => false,
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => false,
        'return_assignment' => false,
        'comment_to_phpdoc' => false,
        'general_phpdoc_annotation_remove' => [
            'annotations' => ['author', 'copyright', 'throws'],
        ],
        'nullable_type_declaration_for_default_null_value' => [
            'use_nullable_type_declaration' => false,
        ],

        // fn => without curly brackets is less readable,
        // also prevent bounding of unwanted variables for GC
        'use_arrow_functions' => false,

        // disable too destructive formating for now
        'escape_implicit_backslashes' => false,
        'heredoc_to_nowdoc' => false,
        'no_useless_else' => false,
        'no_useless_return' => false,
        'phpdoc_no_empty_return' => false,
        'phpdoc_order' => false,
        'phpdoc_var_annotation_correct_order' => false,
        'protected_to_private' => false,
        'simple_to_complex_string_variable' => false,
        'single_line_comment_style' => false,

        // enable some safe rules from @PHP71Migration:risky
        'pow_to_exponentiation' => true,
        'is_null' => true,
        'modernize_types_casting' => true,
        'dir_constant' => true,
        'combine_nested_dirname' => true,
        'non_printable_character' => [
            'use_escape_sequences_in_strings' => true,
        ],

        // TODO
        'align_multiline_comment' => false,
        'array_indentation' => false,
        'array_syntax' => false,
        'blank_line_before_statement' => false,
        'class_attributes_separation' => false,
        'class_definition' => false,
        'constant_case' => false,
        'control_structure_continuation_position' => false,
        'curly_braces_position' => false,
        'dir_constant' => false,
        'elseif' => false,
        'explicit_indirect_variable' => false,
        'explicit_string_variable' => false,
        'function_declaration' => false,
        'general_phpdoc_annotation_remove' => false,
        'global_namespace_import' => false,
        'include' => false,
        'increment_style' => false,
        'list_syntax' => false,
        'method_chaining_indentation' => false,
        'modernize_types_casting' => false,
        'native_constant_invocation' => false,
        'no_blank_lines_after_phpdoc' => false,
        'no_empty_statement' => false,
        'no_extra_blank_lines' => false,
        'no_multiple_statements_per_line' => false,
        'no_null_property_initialization' => false,
        'no_superfluous_phpdoc_tags' => false,
        'no_unneeded_control_parentheses' => false,
        'no_unused_imports' => false,
        'no_useless_concat_operator' => false,
        'operator_linebreak' => false,
        'ordered_imports' => false,
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_indent' => false,
        'phpdoc_no_alias_tag' => false,
        'phpdoc_no_package' => false,
        'phpdoc_scalar' => false,
        'phpdoc_single_line_var_spacing' => false,
        'phpdoc_summary' => false,
        'phpdoc_trim_consecutive_blank_line_separation' => false,
        'phpdoc_types' => false,
        'phpdoc_types_order' => false,
        'single_line_comment_spacing' => false,
        'single_quote' => false,
        'ternary_to_null_coalescing' => false,
        'trailing_comma_in_multiline' => false,
        'visibility_required' => false,
        'yoda_style' => false,
    ])
    ->setFinder($finder)
    ->setCacheFile(sys_get_temp_dir() . '/php-cs-fixer.' . md5(__DIR__) . '.cache');
