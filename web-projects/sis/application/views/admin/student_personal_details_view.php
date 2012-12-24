<h1>Student Personal Details</h1>
<?php
	
	$tmpl=array(
			'table_open' 	=> '<table border="1" cellspacing="0" cellpadding="4" id="student_personal_table"',
			'table_close' 	=> '</table>'
		);

	$this->table->set_heading('ID', 'Last Name', 'First Name', 'Father\'s Name', 'Mother\'s Name', 
		'Present Address', 'Permanent Address', 'Email', 'Phone');
	$this->table->set_template($tmpl);
	echo $this->table->generate($query_result);
	echo '<br/>';
	echo anchor('admin/index', 'Back');

?>