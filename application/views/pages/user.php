<div class="container">
    <div class="user-container">
        <div class="column-account">
            <div class="avatar-account">
                <img src="<?php echo base_url('frontend/img/account_ava.webp'); ?>">
            </div>
            <?php echo $this->session->userdata('LoggedIn')['username']; ?>
            <a class="logout-user" href="<?php echo base_url('logout');?>" class="logout">Đăng xuất</a>
        </div>
        <div class="column-account-info">
            <div class="account-info-title">
                <span>Thông tin cá nhân</span>
            </div>
            <div class="account-info">
                <span class="name">Username: <?php echo $this->session->userdata('LoggedIn')['username']; ?></span>
                <span class="email">Email: <?php echo $this->session->userdata('LoggedIn')['email']; ?> </span>
            </div>
        </div>
    </div>