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
            <td><?php echo img('./uploads/'.$user->avatar) ?></td>
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->first_name ?></td>
            <td><?php echo $user->last_name ?></td>
            <td><?php echo $user->country ?></td>
            <td><?php echo $user->email ?></td>
            <td><a href="<?php echo base_url() ?>index.php/admin/user_delete/<?php echo $user->id ?>"><i class="icon-remove"></i></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br />
<?php echo anchor('admin/index', 'Back') ?>