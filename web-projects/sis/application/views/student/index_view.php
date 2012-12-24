<h1>Student Page</h1>
<?php
	if(!$record)
		echo anchor('student/add_personal_info', 'Add personal information');

	else
		echo anchor('student/view_personal_info', 'View personal information');
?>
<br/>