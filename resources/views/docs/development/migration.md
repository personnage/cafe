# Make migration

## Naming convention

    artisan make:migration <action>_<what>_to_<tablename>_table

Where `action` must be `create`, `drop`, `add`, `remove` etc, `what` is an action name and `tablename` is a table name.

### Create new table
    artisan make:migration create_users_table

### Add column
    artisan make:migration add_confirmable_to_users_table

### Add index
    artisan make:migration add_email_index_to_users_table
    artisan make:migration add_email_phone_unique_to_users_table

# Table names

Entity tables: plural (`users`, `roles`)
Junction tables: singular (`user_role`)

# Column names

## Foreign key columns

Must include full table name (`content_category_type_id`, not just `type_id`)
