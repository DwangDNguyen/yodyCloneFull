<div class="container">
    <div class="register-container">
        <div class="register-form">
            <h1>Đăng ký</h1>
            <?php 
            if($this->session->flashdata('success')){
            ?>
            <div class="success">
                <?php echo $this->session->flashdata('success') ?>
            </div>
            <?php
            }elseif($this->session->flashdata('error')){
            ?>
            <div class="wrong">
                <?php echo $this->session->flashdata('error') ?>
            </div>
            <?php } ?>
            <form action="<?php echo base_url('sign-up');?>" method="POST">
                <input type="text" name="username" placeholder="Username">
                <div class="error"><?php echo form_error('username'); ?></div>
                <input type="email" name="email" placeholder="Email">
                <div class="error"><?php echo form_error('email'); ?></div>
                <input type="password" name="password" placeholder="Password">
                <div class="error"><?php echo form_error('password'); ?></div>
                <button type="submit">Đăng ký</button>
            </form>
            <span>Đã có tài khoản? <a href="<?php echo base_url('login');?>">Đăng nhập</a></span>
        </div>
    </div>
    <div class="register-container-res">
        <div class="register-form-res">
            <h1>Đăng ký</h1>
            <?php 
            if($this->session->flashdata('success')){
            ?>
            <div class="success">
                <?php echo $this->session->flashdata('success') ?>
            </div>
            <?php
            }elseif($this->session->flashdata('error')){
            ?>
            <div class="wrong">
                <?php echo $this->session->flashdata('error') ?>
            </div>
            <?php } ?>
            <form action="<?php echo base_url('sign-up');?>" method="POST">
                <input type="text" name="username" placeholder="Username">
                <div class="error"><?php echo form_error('username'); ?></div>
                <input type="email" name="email" placeholder="Email">
                <div class="error"><?php echo form_error('email'); ?></div>
                <input type="password" name="password" placeholder="Password">
                <div class="error"><?php echo form_error('password'); ?></div>
                <button type="submit">Đăng ký</button>
            </form>
            <span>Đã có tài khoản? <a href="<?php echo base_url('login');?>">Đăng nhập</a></span>
        </div>
    </div>
</div>