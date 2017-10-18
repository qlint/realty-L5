@extends('main2')
@section('title','Error 404')
@section('page-title','Error 404')
@section('breadcrumb','Error 404')
@section('content')
		<!--Error page start-->
        <div class="error-area text-center bg-1 ptb-130">
               <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-content ">
                                <h2>404</h2>
                                <h3>Page not found!</h3>
                                <h4>Oops! Looks like something going wrong</h4>
                                <p>We can’t seem to find the page you’re looking for <br>
                                    make sure that you have typed the currect URL</p>
                                <a class="go-home" href="{{ route('home') }}">Go to home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Error page end-->
@endsection