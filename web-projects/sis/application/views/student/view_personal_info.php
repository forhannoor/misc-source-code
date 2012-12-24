<?php

foreach($query->result() as $value)
{
	echo 'ID: '.$value->id;
	echo '<br/>';
	echo 'Name: '.$value->first_name.' '.$value->last_name;
	echo '<br/>';
	echo 'Father\'s Name: '.$value->father_name;
	echo '<br/>';
	echo 'Mother\'s Name: '.$value->mother_name;
	echo '<br/>';
	echo 'Present Address: '.$value->present_address;
	echo '<br/>';
	echo 'Permanent Address: '.$value->permanent_address;
	echo '<br/>';
	echo 'Email: '.$value->email;
	echo '<br/>';
	echo 'Phone: '.$value->phone;
	echo '<br/>';
}

echo '<br/>';
echo anchor('student/index', 'Back');