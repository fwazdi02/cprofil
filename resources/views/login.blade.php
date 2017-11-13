@extends('layouts.master')
@section('content')
         <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12 mt-5  px-4 mx-auto">
          
            <div class="card">

               <div class="card-block" >
                   <h3 class="text-center my-2">Login Your Account</h3>
                   <hr class="mb-4">
                   <a class="btn btn-danger btn-block btn-social btn-google-plus">
                      <i class="fa fa-google-plus"></i> Sign in with Google
                    </a>

                    <div class="text-muted text-center my-3">
                    <!-- <span class="mr-3"><hr></span> -->
                    or
                    <!-- <span class="ml-3"><hr></span> -->
                    </div>

                    <form class="form-horizontal" action="#" method="post">

                        <input id="idnt" type="text" class="form-control mb-3" name="ident" placeholder="Email or username" value="<?php echo 'ident' ?>">


                        <input id="pw" type="password" class="form-control mb-3" name="pass" placeholder="Password" value="<?php echo 'username' ?>">

                        <div class="form-group my-4">
                            <div class="form-check-inline ml-auto">
                                <label class="font-weight-normal text-muted" for="rm">
                                <input id="rm" type="checkbox" checked="checked"> Remember Me</label>
                            </div>
                            <a href="<?php echo '#' ?>" class="text-muted float-right">Forgot Password ?</a>
                        </div>

                        <small class="text-danger my-0"> 
                         <?php echo '' ?> 
                         </small>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mt-4" name="Login">Login</button>
                        </div>
                        <br>
                </form>

                <div class="text-center">
                    Do not have an account ? <a href="<?php echo '#' ?>">Register</a>
                </div>
                

            </div>
        </div>

        </div> 
    </div> 


@stop