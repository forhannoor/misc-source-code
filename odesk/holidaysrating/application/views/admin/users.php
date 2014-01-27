<h3>Users</h3>
<table class="users_table">
    <thead>
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <?php if(isset($user->avatar)): ?>
            <td><?php echo img('./uploads/'.$user->avatar) ?></td>
            <?php else: ?>
            <td><?php echo img('assets/assets/avatar.jpg') ?></td>
            <?php endif ?>
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->first_name ?></td>
            <td><?php echo $user->last_name ?></td>
            <td><?php echo $user->country ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo btn_delete('admin/user_delete/' . $user->id) ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br />
<?php echo anchor('admin/pm', 'Send PM to all') ?>
<br />
<?php echo anchor('admin/index', 'Back') ?>