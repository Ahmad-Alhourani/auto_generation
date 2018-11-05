<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'gt'                   => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Associated Roles',
                    'dependencies'     => 'Dependencies',
                    'display_name'     => 'Display Name',
                    'group'            => 'Group',
                    'group_sort'       => 'Group Sort',

                    'groups' => [
                        'name' => 'Group Name',
                    ],

                    'name'       => 'Name',
                    'first_name' => 'First Name',
                    'last_name'  => 'Last Name',
                    'system'     => 'System',
                ],

                'roles' => [
                    'associated_permissions' => 'Associated Permissions',
                    'name'                   => 'Name',
                    'sort'                   => 'Sort',
                ],

                'users' => [
                    'active'                  => 'Active',
                    'associated_roles'        => 'Associated Roles',
                    'confirmed'               => 'Confirmed',
                    'email'                   => 'E-mail Address',
                    'name'                    => 'Name',
                    'last_name'               => 'Last Name',
                    'first_name'              => 'First Name',
                    'other_permissions'       => 'Other Permissions',
                    'password'                => 'Password',
                    'password_confirmation'   => 'Password Confirmation',
                    'send_confirmation_email' => 'Send Confirmation E-mail',
                    'timezone'                => 'Timezone',
                    'language'                => 'Language',
                ],
            ],



            'branches'  => [
                    'name' => "Branch Name",
                    'status' => "Status",
                    'contact_no' => "Contact NO",
                    'branch_no' => "Branch NO",
                    'street' => "Street",
                    'city' => "City",
                    'zipcode' => "Zipcode",
                ],
'customers'  => [
                    'name' => "Customer Name",
                    'address' => "Addres",
                    'branch_id' => "Branch Name",
                ],
'employees'  => [
                    'name' => "Emp Name",
                    'branch_id' => "Branch Name",
                    'salary' => "Salary",
                    'pos' => "Position",
                ],
'books'  => [
                    'title' => "Title",
                ],
'updates'  => [
                    'employee_id' => "Emp Name",
                    'book_id' => "Book Name",
                ],
'issues'  => [
                    'customer_id' => "Customer Name",
                    'book_id' => "Book Name",
                    'issue_date' => "Issue date",
                ],
'reverses'  => [
                    'customer_id' => "Customer Name",
                    'book_id' => "Book Name",
                    'reverse_date' => "Reverse date",
                ],
        'gems'  => [
            'name' => "Name",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'description' => "Description",
            'is_deleted' => "Is Deleted",
            'radius' => "Radius",

        ],
        'levels'  => [
            'name' => "Name",
            'order' => "Order",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",
            'description' => "Description",
            'is_deleted' => "Is Deleted",
            'visible_radius' => "Visible Radius",

        ],
        'players'  => [
            'name' => "Full Name",
            'token' => "Token",
            'type' => "Type",
            'birth_date' => "Birth Date",

        ],
        'gem_sightings'  => [
            'gem_id' => "Gem Name",
            'player_id' => "Player Name",
            'founded_at' => "Founded At",
            'lat' => "Lat",
            'lng' => "Lng",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
        'level_gems'  => [
            'gem_id' => "Gem Name",
            'level_id' => "Level Name",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
        'boxes'  => [
            'name' => "Name",
            'description' => "Description",
            'clickable_radius' => "Clickable Radius",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
        'box_gems'  => [
            'gem_id' => "Gem Name",
            'box_id' => "Box Name",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
        'box_sightings'  => [
            'player_id' => "Player Name",
            'box_id' => "Box Name",
            'lat' => "Lat",
            'lng' => "Lng",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
        'items'  => [
            'name' => "Name",
            'description' => "Description",
            'clickable_radius' => "Clickable Radius",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
        'box_items'  => [
            'item_id' => "Item Name",
            'box_id' => "Box Name",
            'create_at' => "Create At",
            'updated_at' => "Updated At",
            'deleted_at' => "Deleted At",

        ],
// Do not delete me :) I'm used for auto-generation








        ],

        'frontend' => [
            'avatar'                    => 'Avatar Location',
            'email'                     => 'E-mail Address',
            'first_name'                => 'First Name',
            'last_name'                 => 'Last Name',
            'name'                      => 'Full Name',
            'email1'                     => 'admin@admin.com',
            'password'                  => 'Password',
            'password1'                  => '1234',
            'password_confirmation'     => 'Password Confirmation',
            'phone'                     => 'Phone',
            'message'                   => 'Message',
            'new_password'              => 'New Password',
            'new_password_confirmation' => 'New Password Confirmation',
            'old_password'              => 'Old Password',
            'timezone'                  => 'Timezone',
            'language'                  => 'Language',
        ],
    ],
];
