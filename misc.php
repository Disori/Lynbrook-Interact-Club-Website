<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text pull-left">&copy;Lynbrook Interact</p>
        <p class="navbar-text pull-right">Made by Brandon Strong</p>
    </div>

</div>

<div class="modal fade" id="contact">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4> test </h4>
            </div>
            <div class="modal-body">
                <h3 style="word-wrap: break-word">Expect it working in <3 days(see what I did there :)</h3>
            </div>
            <div class="modal-footer">
                <a class = "btn btn-default" data-dismiss="modal">Submit</a>
                <a class = "btn btn-primary" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="register">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="register.php" method="POST">
                <div class="modal-header">
                    <h4> Registration Form </h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="post-title" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="firstname" placeholder="John">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post-info" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="lastname" placeholder="Doe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post-info" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" name="email" placeholder="example@exaple.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post-info" class="col-lg-2 control-label">Graduation Year</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="gradyear" placeholder="2017">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post-info" class="col-lg-2 control-label">Username</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="username" placeholder="johndoe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post-info" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password" placeholder="passwordisabadpassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post-info" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="passwordverif" placeholder="chooseauniquepassword">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class = "btn btn-default" data-dismiss="modal">Close</a>
                    <a class = "btn btn-primary" type="submit">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
