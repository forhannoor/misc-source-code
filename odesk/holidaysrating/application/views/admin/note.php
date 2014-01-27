<h3>Notes</h3>
<a href="<?php echo site_url() ?>/admin/note_create"><i class="icon-plus"></i> New</a>
<table class="users_table">
    <thead>
        <th>Title</th>
        <th>Author</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Action</th>
    </thead>
    
    <tbody>
        <?php foreach($notes as $note): ?>
            <tr>
                <td><?php echo anchor('admin/note/' . $note->id, $note->title) ?></td>
                <td><?php echo $this->Ion_auth_model->get_username($note->author) ?></td>
                <td><?php echo ($note->status == 0) ? 'Done' : 'Pending' ?></td>
                <td><?php echo $note->created_at ?></td>
                <td>
                    <a href="<?php echo site_url() ?>/admin/note_changestatus/<?php echo $note->id ?>"><i class="icon-ok"></i></a>
                    &nbsp;
                    <?php echo btn_edit('admin/note_edit/' . $note->id) ?>
                    &nbsp;
                    <?php echo btn_delete('admin/note_delete/' . $note->id) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<br/>
<?php echo anchor('admin/index', 'Back') ?>