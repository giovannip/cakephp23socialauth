<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<h2><?php echo __('Login Through Social Media'); ?></h2>
<?php

echo $this->Html->image("login-facebook.jpg", array(
    "alt" => "Signin with Facebook",
    'url' => array('action'=>'social_login', 'Facebook')
));

echo $this->Html->image("login-google.jpg", array(
    "alt" => "Signin with Google",
    'url' => array('action'=>'social_login', 'Google')
));

echo $this->Html->image("login-twitter.jpg", array(
    "alt" => "Signin with Twitter",
    'url' => array('action'=>'social_login', 'Twitter')
));

?>
<br/>
<center><h2>----OR----</h2></center>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<?php
 echo $this->Html->link( "Add A New User",   array('action'=>'add') ); 
?>