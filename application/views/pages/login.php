<div class="container">
    <!-- <img class="bg-login" src="<?php echo base_url('frontend/img/bg_login.jpg');?>"> -->
    <div class="login-container">
        <div class="login-form">
            <h1>Đăng nhập</h1>
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
            <form action="<?php echo base_url('login-customer'); ?>" method="POST">
                <input type="email" name="email" placeholder="Email">
                <div class="error"><?php echo form_error('email'); ?></div>
                <input type="password" name="password" placeholder="Password">
                <div class="error"><?php echo form_error('password'); ?></div>
                <button type="submit">Đăng nhập</button>
            </form>
            <span>Chưa có tài khoản? <a href="<?php echo base_url('register');?>">Đăng ký</a></span>
        </div>
    </div>
    <div class="login-container-res">
        <div class="login-form-res">
            <h2>Chào mừng bạn đến với Yody!</h2>
            <h1>Đăng nhập</h1>
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
            <form action="<?php echo base_url('login-customer'); ?>" method="POST">
                <input type="email" name="email" placeholder="Email">
                <div class="error"><?php echo form_error('email'); ?></div>
                <input type="password" name="password" placeholder="Password">
                <div class="error"><?php echo form_error('password'); ?></div>
                <button type="submit">Đăng nhập</button>
            </form>
            <span>Chưa có tài khoản? <a href="<?php echo base_url('register');?>">Đăng ký</a></span>
        </div>
    </div>
</div>