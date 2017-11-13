@extends('layouts.master')
@section('content')
       
       
              <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 mx-auto my-5">

                <div class="card">
                    

                <form action="#" method="post" class="form-horizontal">
                        <div class="card-block">
                    
                        <div class="mb-4 mt-2">
     
                        <p class="text-center">
                            <span class="h2">Signup</span><span class="h2" style="color: tomato"> Account</span>
                        </p>
                        </div>  
                        <hr>
                        <div class="row">

                        <div class="col">
                            <div class="form-group ">
                                <label for="fn">Firstname</label>
                                <input id="fn" class="form-control" type="text" name="firstname"  value="<?php echo 'firstname' ?>">
                                <!-- <div class="err"> -->
                                    <small class="text-danger"><?php echo '' ?> </small>
                                <!-- </div> -->
                            </div>
                            
                        </div>
                        
                        <div class="col">
                            <div class="form-group">
                                <label for="ln">Lastname</label><br>
                                <input id="ln" class="form-control" type="text" name="lastname" value="<?php echo 'lastname' ?>">
                                <!-- <div class="err"> -->
                                    <small class="text-danger"><?php '' ?></small>
                                <!-- </div> -->
                             </div>
                        
                            
                        </div>
                            
                        </div>

                            <div class="form-group">
                                <label for="unm">Username</label>
                                <input  id="unm" class="form-control" type="text" name="username" value="<?php echo 'username' ?>">
                                <!-- <div class="err"> -->
                                    <small class="text-danger"><?php echo '' ?></small>
                                <!-- </div> -->
                            </div>
                
                            <div class="form-group">
                                <label for="em">Email address</label>
                                <input  id="em" class="form-control" type="email" name="email" value="<?php echo 'email' ?>">
                                <!-- <div class="err"> -->
                                    <small class="text-danger"><?php echo '' ?></small>
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="pw">Password</label>
                                <input  id="pw" class="form-control" type="password" name="password" >
                                <!-- <div class="err"> -->
                                    <small class="text-danger"><?php echo '' ?></small>
                                <!-- </div> -->
                            </div>
                            <hr class="mb-3">
                            <p class="text-center">By creating an account, you agree to
                                ridread's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                            </p>
                            <hr class="my-2">
                            <div class="text-center mt-4 mb-2" >
                                <button type="submit" class="btn btn-primary  px-5" name="signup">Sign Up</button>
                            </div>
                </div>
                
            </form>
            </div>
            </div>

        </div>


@stop