@extends('sidebar')

@section('content')

<div class="container">
    <div class="row ">
        
        <div class="col-sm-12">
            @if (session()->has('Updated'))
                       <div class="alert alert-dismissable alert-warning" role="alert">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('Updated') }}
                       </div>
            @endif 
            @if (session()->has('Deleted'))
                       <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('Deleted') }}
                       </div>
            @endif 
            <div class="shadow-sm p-1 mb-2 bg-body rounded"><strong>Workers List !</strong></div>
            <div class="card">
                <div class="card-body">
                    <table class="table border"  id="myTable">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>PhoneNO</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Action</th>  
                                                                
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phonenumber}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <form method="POST" action="{{ "delete/".$user->id}}">
                                            @csrf
                                          @if (auth()->user()->role == 'Manager')
                                            <a type="submit" class="btn btn-sm btn-danger show_confirm"  data-toggle="tooltip" 
                                                    title='Delete'><i class="fa fa-trash-o"></i>
                                            </a>
                                          @endif
                                            <a class="btn btn-sm btn-primary edit">
                                              <i class="fa fa-pencil-square-o"></i> 
                                            </a>    
                                        </form>     
                                    </td>                                             
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 

<!-- Modal -->

    <div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="Edit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-edit"></i> Update User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">             
                    <form action="/edit" method="POST">
                        @csrf 
                        <div class="form-group row mb-2">
                            <label for="id" class="col-sm-2 col-form-label"><strong>ID</strong></label>
                            <div class="col-sm-2">
                                <input type="text" readonly class="form-control" id="id" name="id">
                            </div>
                        </div>           
                    
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label"><strong>Name</strong></label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control"  id="name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label for="email" class="col-sm-2 col-form-label"><strong>Email</strong></label>
                        <div class="col-sm-10">
                        <input type="email"  class="form-control"  id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label for="phonenumber" class="col-sm-2 col-form-label"><strong>PhoneNO</strong></label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control"  id="phonenumber" name="phonenumber" required>
                        </div>
                    </div>

                    <div class="form-group row mb-2">
                        <label for="address" class="col-sm-2 col-form-label"><strong>Address</strong></label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control"  id="address" name="address" required>
                        </div>
                    </div>
                    
                    <hr> 
                    <div style="text-align: right">
                        <button  type="button" class="btn btn-warning" data-bs-dismiss="modal"><i class="fa fa-window-close"></i> Cancel</button>
                        <button  class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
                    </div>
                
                    </form>
                </div>
        </div>  
        </div>
    </div> 


</div>
@endsection
