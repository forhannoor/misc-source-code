<h3>Ratings</h3>

<table class="table table-bordered table-narrow">
    <thead>
        <th>Name</th>
        <th>Rating</th>
    </thead>
    
    <tbody>
        <?php foreach($ratings as $rating): ?>
        <tr>
            <td><?php echo $rating->name ?></td>
            <td><?php echo $rating->rating ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php echo anchor('admin/index', 'Back') ?>