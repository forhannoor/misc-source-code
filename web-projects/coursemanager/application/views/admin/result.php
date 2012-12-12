<h1>Result</h1>
<h3>
    <?php
        echo 'Credits Passed : '.$credit_completed;
        echo '<br/>';
        echo 'Credits Remaining : '.$credit_remaining;
        echo '<br/>';
        echo 'Total Grade Point : '.$gradepoint;
        echo '<br/>';
        echo 'CGPA : '.$cgpa;
        echo '<br/>';
        echo 'Number of courses : '.$number_courses;
        echo '<br/>';
        echo 'Number of A\'s : '.$number_A;
    ?>
</h3>
<?php echo anchor('admin/index', 'Back');?>