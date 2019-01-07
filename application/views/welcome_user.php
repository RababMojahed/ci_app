
<h1>Welcome <?php echo $this->session->userdata('user'); ?> </h1>  
<br>  
    <?php echo anchor('Login/logout', 'Logout'); ?>  