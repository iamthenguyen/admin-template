@extends('layouts.pages')

@section('content')
    <div class="row row-table page-wrapper">
       <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
          <!-- START panel-->
          <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
             <div class="panel-heading text-center">
                <a href="#">
                   <img src="assets/img/logo.png" alt="Image" class="block-center img-rounded" />
                </a>
                <p class="text-center mt-lg">
                   <strong>SIGN IN TO CONTINUE.</strong>
                </p>
             </div>
             <div class="panel-body">
                <form role="form" class="mb-lg">
                   <div class="text-right mb-sm"><a href="#" class="text-muted">Need to Signup?</a>
                   </div>
                   <div class="form-group has-feedback">
                      <input id="exampleInputEmail1" type="email" placeholder="Enter email" class="form-control" />
                      <span class="fa fa-envelope form-control-feedback text-muted"></span>
                   </div>
                   <div class="form-group has-feedback">
                      <input id="exampleInputPassword1" type="password" placeholder="Password" class="form-control" />
                      <span class="fa fa-lock form-control-feedback text-muted"></span>
                   </div>
                   <div class="clearfix">
                      <div class="checkbox c-checkbox pull-left mt0">
                         <label>
                            <input type="checkbox" value="" />
                            <span class="fa fa-check"></span>Remember Me</label>
                      </div>
                      <div class="pull-right"><a href="#" class="text-muted">Forgot your password?</a>
                      </div>
                   </div>
                   <button type="submit" class="btn btn-block btn-primary">Login</button>
                </form>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
@endsection