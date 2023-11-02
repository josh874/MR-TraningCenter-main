@extends('sidebar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 mx-1" >
                <div class="card shadow-sm" rounded style="width: 20rem;">
                    <img src="{{asset('uploads/profile_image/'.auth()->user()->profile_photo)}}" 
                    class="card-img-top" style="width:auto; height:300px">
                    <div class="card-body mt-1 text-center">
                        <h5>{{auth()->user()->name}}</h5>
                        <strong><i class="fa-brands fa-mastodon"></i>MR traning Center</strong>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                         <div class="col-sm-12 my-3">
                            <div class="card shadow-sm" rounded style="width: 38rem;">                         
                                <div class="card-body">
                                    <h6><i class="fa fa-info-circle"></i> USER INFORMATION</h6>                                                               
                                    <hr>   
                                        <dl class="row ">
                                            <dt class="col-sm-3 ml-2">Name</dt>
                                            <dd class="col-sm-7 ml-4">{{auth()->user()->name}}</dd>
                                            <dt class="col-sm-3 ml-2 text-truncate">Email</dt>
                                            <dd class="col-sm-7 ml-4 ">{{auth()->user()->email}}</dd>
                                            <dt class="col-sm-3 ml-2">PhoneNumber</dt>
                                            <dd class="col-sm-7 ml-4">{{auth()->user()->phonenumber}}</dd>
                                            <dt class="col-sm-3 ml-2">Address</dt>
                                            <dd class="col-sm-7 ml-4">{{auth()->user()->address}}</dd>
                                            <dt class="col-sm-3 ml-2">Sex</dt>
                                            <dd class="col-sm-7 ml-4">{{auth()->user()->sex}}</dd>
                                            <dt class="col-sm-3 ml-2">Role</dt>
                                            <dd class="col-sm-7 ml-4"><button class="btn btn-sm btn-primary" style="border-radius:20px;">{{auth()->user()->role}}</button></dd>
                                        </dl> 
                                    <hr>                                
                                </div>
                            </div>
                         </div>
            </div>
        
        </div>
    </div>
@endsection