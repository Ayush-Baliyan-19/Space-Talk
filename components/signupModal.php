<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true" style="color:#503350;background-image: url(components/bg_stars.jpg);background-size: 100%">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color:#e5e5e5">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign to create an account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action='components/handle_signup.php' method='post'>
                <div class="mb-3 mx-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="signupemail" name='signupemail' aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <!-- <div class="mb-3 mx-3">
                    <label for="exampleInputUsername" class="form-label">Username</label>
                    <input type="string" class="form-control" id="username" name='username'>
                </div> -->
                <!-- <div class="mb-3 mx-3">
                    <label for="exampleInputDesc" class="form-label">Something about you..</label>
                    <input type="string" class="form-control" id="desc" name='desc'>
                </div> -->
                <div class="mb-3 mx-3">
                    <label for="exampleInputDate" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="dob" name='dob'>
                </div>
                <div class="mb-3 mx-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signuppassword" name='signuppassword'>
                </div>

                <div class="mb-3 mx-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="signupcpassword" name='signupcpassword'>
                </div>

                <!-- <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1" style="background-size:300px;background-image: url(components/images/1.jpg)">Robot</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> -->

                <!-- <div class="mb-3 mx-3 text-center" style="width:auto;height:auto">
                    <label for="exampleInputImage1" class="form-label text-center" width="100%">War Robot</label>
                    <input class="form-control text-center" id="signupimage1" name="signupimage1" style="padding: 2vw;background-image: url(components/images/1.jpg);height:300px;">
                </div>

                <div class="mb-3 mx-3 text-center" style="width:auto;height:400px">
                    <label for="exampleInputImage1" class="form-label text-center" width="100%">White Dwarf</label>
                    <input class="form-control text-center" id="signupimage2" name="signupimage2" style="padding: 2vw;background-image: url(components/images/2.jpg);height:300px;object-fit:cover">
                </div> -->
                <!-- style="padding: 0px auto;width:100%" -->
                <!-- <div class="btn-group dropstart" style="width:70%;margin: 1vw 15%">
                    <button type="button" class="btn btn-success dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">
                        Profile Image
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                            
                    <hr>
                         <li style="margin:1vw;">
                            <div class="mb-3 mx-3">
                                <label for="exampleInputImage2" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="signupcpassword" name='signupcpassword'>
                            </div>
                        </li> -->
                    <!-- </ul> -->
                <!-- </div> --> 
                <button type="submit" class="btn btn-primary" style="width:70%;margin: 1vw 15%">Submit</button>
                </div>
            </form>
    </div>
</div>
</div>