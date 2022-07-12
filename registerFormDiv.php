<div class="registerFormDiv">
    <form id="register" method="POST" action="./processors/registerProcessor.php">
        <h1>Register</h1>
        <p style="font-size:small;">New here? Enter here to create an account.</p>

        <hr id="formHrLine">

        <div class="row d-flex justify-content-center">
        <div class="col-12"><label class="form-label" for="name">Name</label></div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control text-center" id="name" name="fName" placeholder="First name">
                    <input type="text" class="form-control text-center" id="name" name="lName" placeholder="Last name">
                </div>
            </div>

            <div class="col-12 mt-2"><label class="form-label" for="email">Email</label></div>
            <div class="col-md-6">
                <input class="form-control text-center" type="text" placeholder="Enter email" name="email" id="email">
            </div>

            <div class="col-12 mt-2"><label class="form-label" for="institution">Institution</label></div>
            <div class="col-md-6">
                <input class="form-control text-center" type="text" placeholder="Enter institution" name="institution" id="institution">
            </div>

            <div class="col-12 mt-2"><label class="form-label" for="psw">Password</label></div>
            <div class="col-md-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" id="showHideBtn2" type="button" onclick="showHidePassReg()">Show</button>
                    </div>
                    <input class="form-control text-center" type="password" placeholder="Enter password" name="psw" id="psw2">
                    <input class="form-control text-center" type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat">
                </div>
            </div>
        </div>

        <hr id="formHrLine">

        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>