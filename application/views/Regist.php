<div class="container-fluid formVal">
    <div class="row">
        <div class="col-lg-4 formContainer">
            <div class="my-5"></div>
            <form action="<?= base_url(); ?>index.php/Controller/regist" method="POST" class="form">
                <h1 class="display-4 text-center">Registration</h1>

                <div class="my-5"></div>

                <div class="form-group">
                    <label class="form-label" for="idUser">ID User</label>
                    <input id="idUser" class="form-input" type="text" name="idUser"/>
                </div>  
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input id="username" class="form-input" type="text" name="username"/>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input id="password" class="form-input" type="password" name="password"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="regist" id="" class="form-control btn btn-danger" value="Registration Here">
                </div>
            </form>
        </div>
    </div>
</div>