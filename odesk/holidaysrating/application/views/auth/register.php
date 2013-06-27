<div id="auth_form">
<?php

echo validation_errors();
echo '<br/>';
echo '<br/>';
echo form_open('auth/register');
echo form_label('First Name', 'first_name');
echo '<br/>';
echo form_input('first_name');
echo '<br/>';
echo form_label('Last Name', 'last_name');
echo '<br/>';
echo form_input('last_name');
echo '<br/>';
echo form_label('Email', 'email');
echo '<br/>';
echo form_input('email');
echo '<br/>';
echo form_label('Password', 'password');
echo '<br/>';
echo form_password('password');
echo '<br/>';
echo form_label('Repeat Password', 'password_confirm');
echo '<br/>';
echo form_password('password_confirm');
echo '<br/>';

?>
<br />
<p>By clicking "Submit", you are accepting <a id="click" style="cursor: pointer;">Terms of use</a></p>
<div id="terms_of_use">
<p>By using and accessing this website, www.holidaysrating.com (collectively referred to as the "Site" or "holidaysrating" in these Terms of Use), you ("you", "user" or, "member") agree to these Terms of Use (collectively, the "Terms of Use" or "Agreement"). 
<br />
<strong>IF YOU DO NOT AGREE TO THE TERMS OF THIS AGREEMENT, IMMEDIATELY STOP ACCESSING THIS SITE.</strong>
<br /><br />
You agree not to copy, distribute, transmit, display, perform, reproduce, publish, license, transfer, create derivate work from, sell or re-sell any content or information obtained from or through the Site. Third-party Sites. The Site may contain links or pictures to/from other websites maintained by third-parties. These links or pictures are provided solely as a convenience and does not imply endorsement of, or association with, the party by Holidaysrating. Other pictures are send to us by members of Holidaysrating. If you upload your pictures or videos, you agree that Holidaysrating has the right to publish them. Used in our banner, we could modify them. 
<br />
<strong>Any sexual content/movies or pictures will be not permitted and delete from our site.</strong>
<br /><br />
Modifications to this Agreement. Holidaysrating reserves the right to change or modify any of the terms and conditions contained in this Agreement at any time. You acknowledge and agree that it is your responsibility to review the Site and these Terms of Use from time to time. Your continued use of the Site after such modifications to this Agreement will constitute acknowledgment of the modified Terms of Use and agreement to abide and be bound by the modified Terms of Service. Termination of Use. Holidaysrating shall have the right to immediately terminate or suspend, in its discretion, your access to all or part of the Site with or without notice for any reason. Limitation of Liability. In no event shall Holidaysrating or its affiliates be liable for any indirect, incidental, special, punitive damages or consequential damages of any kind, or any damages whatsoever arising out of or related to your use of the Site, the content and other information obtained therein.
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#terms_of_use").hide();
        
        $("#click").click(function()
        {
            $("#terms_of_use").toggle();
        }
        );
    }
    );
</script>
<?php
echo form_submit('', 'Submit');
echo '&nbsp;&nbsp;&nbsp;';
echo form_reset('', 'Reset');
echo form_close();

?>
</div>