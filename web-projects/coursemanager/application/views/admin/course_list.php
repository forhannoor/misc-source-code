<h1>Course List</h1>
<div id="excel">
    <?php
        $csv_arr=array(
            'src' => 'assets/images/csv_file.png',
            'width' => '36',
            'height' => '36'
        ); 

        $excel_arr=array(
			'src' => 'assets/images/xls.jpg',
			'width' => '36',
			'height' => '36'
		);

		echo anchor('admin/csv', img($csv_arr));
        echo anchor('admin/excel', img($excel_arr));
    ?>
</div>

<div class="CSSTableGenerator">
    <table cellspacing="5" cellpadding="5" border="1" >
        <tr> 
            <td>
                Course Code
            </td>
            <td >
                Title
            </td>
            <td>
                Description
            </td>
            <td>
                Credit
            </td>
            <td >
                Status
            </td>
            <td>
                Grade
            </td>
            <td>
                Grade Point
            </td>
            <td>
                Operation
            </td>
        </tr>

        <?php
            $data_delete=array(
                    'src' => 'assets/images/delete_2.png',
                    'width' => '20',
                    'height' =>'20'
                        );

            $data_edit=array(
                    'src' => 'assets/images/edit_2.png',
                    'width' => '20',
                    'height' =>'20'
                        );

            foreach($result->result() as $r)
            {
                echo '<tr>';
                echo '<td>';
                echo $r->course_code;
                echo '</td>';
                echo '<td>';
                echo $r->title;
                echo '</td>';
                echo '<td>';
                echo $r->description;
                echo '</td>';
                echo '<td>';
                echo $r->credit;
                echo '</td>';
                echo '<td>';
                echo $r->status;
                echo '</td>';
                echo '<td>';
                echo $r->grade;
                echo '</td>';
                echo '<td>';
                echo $r->grade_point;
                echo '</td>';
                echo '<td>';
                echo anchor('admin/delete/'.$r->course_code, img($data_delete));
                echo ' ';
                echo anchor('admin/update/'.$r->course_code, img($data_edit));
                echo '</td>';
                echo '</tr>';
            }

        ?>
    </table>
</div>

    <?php echo '<br/>'; ?>
    <a href =" javascript:void(null); search()">Find</a><br/>
    <?php echo anchor('admin/update_grade_point', 'Update Grade Point');?>
    &nbsp;
    <?php
        $source=array(
            'src' => 'assets/images/information.png',
            'width' => '14',
            'height' =>'14'
        );
    ?>
    <?php echo anchor('admin/help_update_grade_point', img($source)); ?>
    <?php echo '<br/>'; ?>
    <?php echo anchor('admin/add_course', 'Add a Course');?>
    <?php echo '<br/>'; ?>
    <?php echo anchor('admin/index', 'Back');?>