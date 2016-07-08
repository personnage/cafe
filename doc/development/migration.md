# Make migration

## Convection

    artisan make:migration <action>_<what>_to_<tablename>_table

Where `action` must be `create`, `drop`, `add`, `remove` etc, `what` must action name and where `tablename` this is a table name.

### Create new table
    artisan make:migration create_users_table

### Add column
    artisan make:migration add_confirmable_to_users_table

### Add index
    artisan make:migration add_email_index_to_users_table
    artisan make:migration add_email_phone_unique_to_users_table
