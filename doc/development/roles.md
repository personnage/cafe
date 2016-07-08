# ACL

## Roles

### Create new role
    $role = new Role
    $role->name = 'manager'
    $role->lable = 'Site Manager'
    $role->save();

## Permission

### Create new permission

    $permission = new Permission
    $permission->name = 'update-post'
    $permission->label = 'Allowed to update a post.'
    $permission->save();

### Link between role and permissions.

    $role->givePermissionTo($permission);
