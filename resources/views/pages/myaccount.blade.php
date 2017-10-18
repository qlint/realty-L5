@extends('main2')
@section('title','My Account')
@section('page-title','My Account')
@section('breadcrumb','My Account')
@section('content')
		<!--My account start-->
        <div class="agent-details-page pt-130">
            <div class="agent-details">
                <div class="container">
                   <form action="#">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="agent-profile">
                                    <div class="single-team">
                                        <div class="profile-img">
                                            <img src="{{ URL::asset('img/agent/7.jpg') }}" alt="">
                                        </div>
                                        <div class="profile_name">
                                            <label for="profile">
                                                 <span>Change your image</span> <input id="profile" type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="profile-update">
                                    <div class="profile-title">
                                        <h5>My profile infomation</h5>
                                    </div>
                                    <div class="profile-desc">
                                        <div class="row">
                                            <div class="profile-top-form">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Name</label>
                                                        <input type="text" placeholder="You name here">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Email</label>
                                                        <input type="text" placeholder="You Email here">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Phone</label>
                                                        <input type="text" placeholder="You Phone here">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="input-type">
                                                        <label>Your Skpe</label>
                                                        <input type="text" placeholder="You Skype here">
                                                    </div>
                                                </div>
                                                <div class="profile-top-form-bottom">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-type">
                                                            <label>Title</label>
                                                            <input type="text" placeholder="You Company Title here">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-type">
                                                            <label>About me</label>
                                                            <textarea placeholder="Write here"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-socail-profile mt-50 ">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="profile-title mt-50">
                                        <h5>My social profile</h5>
                                    </div>
                                </div>
                                <div class="social-form-box">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Facebook</label>
                                            <input type="text" placeholder="Your facebook url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Linkedin</label>
                                            <input type="text" placeholder="Your Linkedin url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Twitter</label>
                                            <input type="text" placeholder="Your Twitter url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Instagram</label>
                                            <input type="text" placeholder="Your Instagram url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Youtube</label>
                                            <input type="text" placeholder="Your Youtube url">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="input-type">
                                            <label>Website</label>
                                            <input type="text" placeholder="Your Website url">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="update-profile-submit">
                                    <button type="submit">Update profile</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="change-password mt-50">
                            <div class="col-md-12">
                                <div class="profile-title">
                                    <h5>Change password</h5>
                                </div>
                            </div>
                            <form action="#">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-type">
                                        <label>Old password</label>
                                        <input type="password" placeholder="Old password">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-type">
                                        <label>New password</label>
                                        <input type="password" placeholder="New password">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-type">
                                        <label>Confirm password</label>
                                        <input type="password" placeholder="Confirm password">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="update-profile-submit">
                                        <button type="submit">Update password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My account end-->
        </div>
@endsection