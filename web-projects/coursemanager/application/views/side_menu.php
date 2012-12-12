<div id="clock">
    <object type="application/x-shockwave-flash"
        data="<?php echo base_url()?>assets/images/clock.swf"
        width="200" height="110">
        <param name="movie" value="<?php echo base_url()?>assets/images/clock.swf" />
        <param name="WMode" value="Transparent" />
    </object>
</div>

<div id="link">
    <?php
    
//        echo anchor('http://www.google.com', 'Google');
//        echo '<br/>';
//        echo anchor('http://www.facebook.com', 'Facebook');
//        echo '<br/>';
//        echo anchor('http://www.gmail.com', 'Gmail');
//        echo '<br/>';
//        echo anchor('http://www.engrade.com', 'Engrade');
//        echo '<br/>';
//        echo anchor('http://www.sourceforge.net', 'Sourceforge');
//        echo '<br/>';
        $fb=array(
            'src' => 'assets/images/facebook.png',
            'width' => '50',
            'height' => '50'
        );
        
        $g=array(
            'src' => 'assets/images/google.png',
            'width' => '50',
            'height' => '50'
        );
        
        $gm=array(
            'src' => 'assets/images/gmail.png',
            'width' => '50',
            'height' => '50'
        );
        
        $sf=array(
            'src' => 'assets/images/sourceforge.jpg',
            'width' => '50',
            'height' => '50'
        );
        
        $en=array(
            'src' => 'assets/images/engrade.png',
            'width' => '50',
            'height' => '50'
        );
        
        echo anchor('http://www.google.com', img($g));
        echo '<br/>';
        echo anchor('http://www.gmail.com', img($gm));
        echo '<br/>';
        echo anchor('http://www.facebook.com', img($fb));
        echo '<br/>';
        echo anchor('http://www.engrade.com', img($en));
        echo '<br/>';
        echo '<br/>';
        echo anchor('http://www.sourceforge.net', img($sf));
        
    ?>
</div>