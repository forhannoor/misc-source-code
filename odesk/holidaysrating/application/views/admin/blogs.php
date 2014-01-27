<h3>Blogs</h3>
<table class="table table-narrow table-condensed table-bordered table-hover">
    <th>Title</th>
    <th>Approve</th>
    <th>Delete</th>
    
    <?php foreach($blogs as $blog): ?>
    <tr>
        <td><?php echo anchor('admin/blog_read/' . $blog->id, $blog->title) ?></td>
        <td><?php echo anchor('admin/blog_approve/' . $blog->id, '<i class = "icon-thumbs-up"></i>') ?></td>
        <td><?php echo anchor('admin/blog_delete/' . $blog->id, '<i class = "icon-remove-sign"></i>') ?></td>
    </tr>
    <?php endforeach ?>
</table>