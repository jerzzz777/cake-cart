<?php
if  ($session->check('Message.auth')) $session->flash('auth');
echo $form->create('Customer', array('action' => 'login'));
echo $form->input('email');
echo $form->input('password');
echo $form->end('Login');
?>
