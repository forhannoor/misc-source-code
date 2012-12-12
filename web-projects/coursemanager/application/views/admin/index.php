<h1><?php echo 'Welcome, '.$this->ion_auth->get_user()->username; ?></h1>

<div id="menu">
    <div id="admin_menu">
        <div id="action_logo">
            <?php 
                $add=array(
                    'src' => 'assets/images/add-course.gif',
                    'width' => '80',
                    'height' => '80'
                );
                echo anchor('admin/add_course', img($add));
            ?>
        </div>
        <div id="action_description">
            <h3><?php echo anchor('admin/add_course', 'Add a Course') ?></h3>
            <p>Add a new course and it's description in the course list</p> 
        </div>
    </div>
    <div id="admin_menu">
        <div id="action_logo">
            <?php 
                $add=array(
                    'src' => 'assets/images/course-list.jpg',
                    'width' => '80',
                    'height' => '80'
                );

                echo anchor('admin/course_list', img($add));
            ?>
        </div>
        <div id="action_description">
            
        </div>
        <h3><?php echo anchor('admin/course_list', 'Course List') ?></h3>
        <p>View information like course title, credits, grades, status etc.</p>
    </div>
    <div id="admin_menu">
        <div id="action_logo">
            <?php 
                $add=array(
                    'src' => 'assets/images/view_result.gif',
                    'width' => '80',
                    'height' => '80'
                );

                echo anchor('admin/result', img($add));
            ?>
        </div>
        <div id="action_description">
            
        </div>
        <h3><?php echo anchor('admin/result', 'View Result') ?></h3>
        <p>View result, number of courses done or remaining, number of credits passed etc.</p>
    </div>
    <div id="admin_menu">
        <div id="action_logo">
            <?php 
                $add=array(
                    'src' => 'assets/images/profile-photo.jpg',
                    'width' => '80',
                    'height' => '80'
                );

                echo anchor('admin/profile', img($add));
            ?>
        </div>
        <div id="action_description">
            
        </div>
        <h3><?php echo anchor('admin/profile', 'View Profile') ?></h3>
        <p>View your information</p>
    </div>
    <div id="admin_menu">
        <div id="action_logo">
            <?php 
                $add=array(
                    'src' => 'assets/images/webmail.gif',
                    'width' => '80',
                    'height' => '80'
                );

                echo anchor('email/index', img($add));
            ?>
        </div>
        <div id="action_description">
            
        </div>
        <h3><?php echo anchor('email/index', 'Webmail') ?></h3>
        <p>Use it to send emails</p>
    </div>
</div>