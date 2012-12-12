<h1>Welcome to Course Management System</h1>
<h3>
    <?php
        if(!$this->ion_auth->logged_in())
        {
            echo 'Before you proceed, please '.anchor('auth/login', 'login');
            echo '<br/>';
            echo '<br/>';
            echo 'Don\'t have an account? '.anchor('auth/create_user', 'Register').' now';
        }
        
        else
            echo 'You are logged in.';
        
        echo '<br/>';
        echo '<br/>';
        
        if($this->ion_auth->is_admin())
            echo anchor('admin/index', 'Admin Panel');
    ?>
</h3>