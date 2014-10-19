<div>
    Welcome <?php if($this->session->userdata('username')!=null) echo $this->session->userdata('username')."!"; ?>
</div>
<div>
    <a href="<?php echo base_url();?>user_home/logout">Log out</a>
</div>