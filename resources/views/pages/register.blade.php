@extends('main2')
@section('title','Register')
@section('page-title','Register')
@section('breadcrumb','Register')
@section('content')
		<!--Register page inner start-->
        <div class="register-page-inner ptb-100 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <div class="register-page-form">
                            <div class="account-title">
                                <h5>Creat an Account</h5>
                            </div>
                            <form action="#">
                                <div class="username">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="email">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                                 <div class="agree-text">
                                    <p>
                                        <label>
                                            <input type="checkbox"> <span>I agree with your</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="register">
                                    <button type="button">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Register page inner end-->
@endsection