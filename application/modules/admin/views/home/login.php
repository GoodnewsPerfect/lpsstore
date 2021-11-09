<style>
    body {
        background-image:url('/assets/imgs/login-bg.png');
        background-position: bottom  right;
        background-repeat: no-repeat;
        background-color:#548fd0;
    }
    .avatar {background-image:url('../attachments/site_logo/NewLogo.jpg')}
	.avatar {
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 0%;
    border: 0px solid #faf3f3;
    background-size: cover;
}
</style>
<div class="container">
    <div class="login-container">
        <div id="output">       
            <?php
            if ($this->session->flashdata('err_login')) {
                ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('err_login') ?></div>
                <?php
            }
            ?></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="" method="POST">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>