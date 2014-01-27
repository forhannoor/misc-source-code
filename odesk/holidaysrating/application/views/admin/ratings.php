<h3>Ratings</h3>

<table class="tablesorter" id="myTable">
    <thead>
        <th>Name</th>
        <th>Rating</th>
        <th>Total Vote</th>
    </thead>
    
    <tbody>
        <?php foreach($ratings as $rating): ?>
        <tr>
            <td><?php echo $rating->name ?></td>
            <td><?php echo round($rating->rating, 1) ?></td>
            <td><?php echo $this->Admin_model->get_num_voters($rating->name) ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php echo anchor('admin/index', 'Back') ?>

<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>