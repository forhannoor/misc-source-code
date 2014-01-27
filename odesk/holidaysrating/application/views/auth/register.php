<div id="auth_form">
<?php echo validation_errors() ?>
<br />
<?php echo form_open('auth/register') ?>
<?php echo form_label('First Name', 'first_name') ?>
<br/>
<?php echo form_input('first_name') ?>
<br/>
<?php echo form_label('Last Name', 'last_name') ?>
<br/>
<?php echo form_input('last_name') ?>
<br/>
<?php echo form_label('Email', 'email') ?>
<br/>
<?php echo form_input('email') ?>
<br/>
<?php echo form_label('Password', 'password') ?>
<br/>
<?php echo form_password('password') ?>
<br/>
<?php echo form_label('Repeat Password', 'password_confirm') ?>
<br/>
<?php echo form_password('password_confirm') ?>
<br/>
<br />
<img src="<?php echo base_url() ?>assets/images/view/register.jpg" alt="register" />
<br />
<br/>
<p>By clicking "Submit", you are accepting <a id="click" style="cursor: pointer;">Terms of use</a></p>
<div id="terms_of_use">
<p>By using and accessing this website, www.holidaysrating.com (collectively referred to as the "Site" or "holidaysrating" in these Terms of Use), you ("you", "user" or, "member") agree to these Terms of Use (collectively, the "Terms of Use" or "Agreement"). 
<br /><br />
<strong>IF YOU DO NOT AGREE TO THE TERMS OF THIS AGREEMENT, IMMEDIATELY STOP ACCESSING THIS SITE.</strong>
<br /><br />
You agree not to copy, distribute, reproduce, license, transfer, create derivate work from, sell or re-sell any content or information obtained from or through the Site. Third-party Sites. The Site may contain links or pictures to/from other websites maintained by third-parties. These links or pictures are provided solely as a convenience and does not imply endorsement of, or association with, the party by Holidaysrating. Other pictures are send to us by members of Holidaysrating. If you upload your pictures or videos, you agree that Holidaysrating has the right to modify/publish them. If you believe some of them may infringe your copyright and don't want them to appear on Holidaysrating, please contact us and we will delete them on demand, as soon as possible.
<br /><br />
<strong>You may not link, in any manner, to sites or images containing pornography, sexually explicit or violent material.</strong>
<br /><br />
Holidaysrating does not advocate or condone racism, violence, rebellion, extremist views or an overthrow of any government. Please enjoy our website, but also please remember to use common courtesy when posting and refrain from posting personal attacks, insults, profanity, vulgarity, threats, racial or religious bigotry, or any other materials offensive or otherwise inappropriate. 
<br /><br />
Modifications to this Agreement. Holidaysrating reserves the right to change or modify any of the terms and conditions contained in this Agreement at any time. You acknowledge and agree that it is your responsibility to review the Site and these Terms of Use from time to time. Your continued use of the Site after such modifications to this Agreement will constitute acknowledgment of the modified Terms of Use and agreement to abide and be bound by the modified Terms of Service. Termination of Use. Holidaysrating shall have the right to immediately terminate or suspend, in its discretion, your access to all or part of the Site with or without notice for any reason. Limitation of Liability. In no event shall Holidaysrating or its affiliates be liable for any indirect, incidental, special, punitive damages or consequential damages of any kind, or any damages whatsoever arising out of or related to your use of the Site, the content and other information obtained therein.</p>
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

<?php echo form_submit('', 'Submit') ?>
&nbsp;&nbsp;&nbsp;
<?php echo form_reset('', 'Reset') ?>
<?php echo form_close() ?>

</div>