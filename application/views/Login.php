<div class="container-fluid formVal">
    <div class="row justify-content-end">
        <div class="col-lg-4 formContainer">
            <div class="my-5"></div>
            <form action="<?= base_url(); ?>index.php/Controller/login" method="POST" class="form">
                <h1 class="display-4 text-center">Log In</h1>

                <div class="my-5"></div>

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input id="username" class="form-input" type="text" name="username"/>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input id="password" class="form-input" type="password" name="password"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" id="" class="form-control btn btn-danger" value="Log In Here">
                </div>
                <p class="text-center">
                    <a href="<?= base_url(); ?>index.php/Controller/registrationPage">
                        Create account
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>