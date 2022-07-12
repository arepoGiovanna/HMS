<div class="loginFormDiv">    
    <form id="login" method="POST" action="./processors/loginProcessor.php">
        <h1>Login</h1>
        <p style="font-size:small;">Already own an account? Enter here to login.</p>

        <hr id="formHrLine">

        <div class="row d-flex justify-content-center">
            <div class="col-md-12"><label for="uName" class="form-label">Username</label></div>
            <div class="col-md-6"><input class="form-control text-center" type="text" name="username" id="uName" placeholder="Enter username"></div>

            <div class="col-md-12 mt-3"><label for="pass" class="form-label">Password</label></div>
            <div class="col-md-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" id="showHideBtn1" type="button" onclick="showHidePassLogin()">Show</button>
                    </div>
                    <input class="form-control text-center" type="password" name="password" id="psw1" placeholder="Enter password">
                </div>
            </div>
        </div>

        <hr id="formHrLine">

        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <input class="btn btn-primary" type="submit" name="log" id="log" value="Login">
            </div>

            <div class="col-12 mt-3">
                <input type="checkbox" id="check"> <span>Remember me</span>
            </div>

            <div class="col-12 mt-3">
                Forgot <a href="./processors/forgotPassProcessor.php">password</a>
            </div>
        </div>
    </form>
</div>