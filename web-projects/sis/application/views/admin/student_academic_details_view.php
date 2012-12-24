<h1>Student Academic Details</h1>
<?php
	
	$tmpl=array(
			'table_open' 	=> '<table border="1" cellspacing="0" cellpadding="4" id="student_academic_table"',
			'table_close' 	=> '</table>'
		);

	$this->table->set_heading('ID', 'Department', 'Credits Completed', 'CGPA');
	$this->table->set_template($tmpl);
	echo $this->table->generate($query_result);
	echo '<br/>';
	echo anchor('admin/index', 'Back');

?>