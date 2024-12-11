<?php

return [
    '@PSR1' => true,
    '@PSR12' => true,
    'align_multiline_comment' => false,
    'array_indentation' => true,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces' => [
        'default' => 'single_space',
    ],
    'blank_line_after_namespace' => true,
    'blank_line_after_opening_tag' => true,
    'blank_line_before_statement' => [
        'statements' => ['break', 'continue', 'declare', 'default', 'exit', 'if', 'return', 'switch', 'throw', 'try'],
    ],
    'braces' => [
        'allow_single_line_closure' => false,
        'position_after_anonymous_constructs' => 'same',
        'position_after_control_structures' => 'same',
        'position_after_functions_and_oop_constructs' => 'next',
    ],
    'cast_spaces' => [
        'space' => 'single',
    ],
    'class_attributes_separation' => [
        'elements' => ['method' => 'one'],
    ],
    'class_definition' => [
        'multi_line_extends_each_single_line' => false,
        'single_item_single_line' => false,
        'single_line' => false,
    ],
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'constant_case' => [
        'case' => 'lower',
    ],
    'declare_equal_normalize' => [
        'space' => 'none',
    ],
    'elseif' => true,
    'encoding' => true,
    'full_opening_tag' => true,
    'function_declaration' => [
        'closure_function_spacing' => 'one',
    ],
    'function_typehint_space' => true,
    'include' => true,
    'increment_style' => [
        'style' => 'pre',
    ],
    'indentation_type' => true,
    'line_ending' => true,
    'linebreak_after_opening_tag' => true,
    'lowercase_cast' => true,
    'lowercase_keywords' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'method_argument_space' => [
        'after_heredoc' => false,
        'keep_multiple_spaces_after_comma' => false,
        'on_multiline' => 'ignore',
    ],
    'method_chaining_indentation' => true,
    'multiline_comment_opening_closing' => true,
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'native_function_casing' => true,
    'native_function_type_declaration_casing' => true,
    'new_with_braces' => [
        'anonymous_class' => false,
        'named_class' => false,
    ],
    'no_blank_lines_after_phpdoc' => true,
    'no_break_comment' => [
        'comment_text' => 'no break',
    ],
    'no_closing_tag' => true,
    'no_empty_comment' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => [
        'tokens' => ['extra'],
    ],
    'no_leading_namespace_whitespace' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_after_function_name' => true,
    'no_spaces_around_offset' => [
        'positions' => ['inside', 'outside'],
    ],
    'no_spaces_inside_parenthesis' => true,
    'no_superfluous_elseif' => true,
    'no_superfluous_phpdoc_tags' => [
        'allow_mixed' => true,
        'allow_unused_params' => false,
    ],
    'no_trailing_comma_in_list_call' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_trailing_whitespace' => true,
    'no_trailing_whitespace_in_comment' => true,
    'no_unneeded_control_parentheses' => [
        'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
    ],
    'no_unneeded_curly_braces' => [
        'namespaces' => false,
    ],
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => [
        'after_heredoc' => false,
    ],
    'normalize_index_brace' => true,
    'not_operator_with_successor_space' => true,
    'object_operator_without_whitespace' => true,
    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'constant_public', 'constant_protected', 'constant_private',
            'property_public', 'property_protected', 'property_private',
            'construct', 'destruct', 'magic', 'phpunit',
            'method_public_static', 'method_protected_static', 'method_private_static',
            'method_public', 'method_protected', 'method_private',
        ],
    ],
    'ordered_imports' => [
        'sort_algorithm' => 'alpha',
        'imports_order' => ['class', 'function', 'const'],
    ],
    'php_unit_fqcn_annotation' => true,
    'php_unit_method_casing' => [
        'case' => 'snake_case',
    ],
    'phpdoc_align' => [
        'align' => 'left',
        'tags' => ['param', 'return', 'throws', 'type', 'var'],
    ],
    'phpdoc_annotation_without_dot' => true,
    'phpdoc_indent' => true,
    'phpdoc_line_span' => [
        'const' => 'single',
        'method' => 'single',
        'property' => 'single',
    ],
    'phpdoc_no_access' => true,
    'phpdoc_no_alias_tag' => [
        'replacements' => [
            'property-read' => 'property',
            'property-write' => 'property',
            'type' => 'var',
            'link' => 'see',
        ],
    ],
    'phpdoc_no_empty_return' => true,
    'phpdoc_no_package' => true,
    'phpdoc_no_useless_inheritdoc' => true,
    'phpdoc_order' => true,
    'phpdoc_return_self_reference' => [
        'replacements' => [
            'this' => '$this',
            '@this' => '$this',
            '$self' => 'self',
            '@self' => 'self',
            '$static' => 'static',
            '@static' => 'static',
        ],
    ],
    'phpdoc_scalar' => [
        'types' => ['boolean', 'double', 'integer', 'real', 'str'],
    ],
    'phpdoc_separation' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => false,
    'phpdoc_trim' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_types' => [
        'groups' => ['simple', 'alias', 'meta'],
    ],
    'phpdoc_types_order' => [
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ],
    'phpdoc_var_without_name' => true,
    'php_unit_attributes' => true,
    'return_type_declaration' => [
        'space_before' => 'none',
    ],
    'semicolon_after_instruction' => true,
    'single_blank_line_at_eof' => true,
    'single_class_element_per_statement' => [
        'elements' => ['const', 'property'],
    ],
    'single_line_after_imports' => true,
    'single_line_comment_style' => [
        'comment_types' => ['asterisk', 'hash'],
    ],
    'single_line_empty_body' => true,
    'single_line_throw' => true,
    'single_quote' => true,
    'space_after_semicolon' => true,
    'standardize_increment' => true,
    'standardize_not_equals' => true,
    'switch_case_semicolon_to_colon' => true,
    'switch_case_space' => true,
    'trailing_comma_in_multiline' => [
        'elements' => ['arrays'],
    ],
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'visibility_required' => [
        'elements' => ['property', 'method', 'const'],
    ],
    'whitespace_after_comma_in_array' => [
        'ensure_single_space' => true,
    ],
    'yoda_style' => [
        'equal' => false,
        'identical' => false,
        'less_and_greater' => false,
    ],
];
