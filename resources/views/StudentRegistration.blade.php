@extends('sidebar')

@section('content')

   <div class="shadow-sm p-3 mx-5 bg-body rounded ">
       <div class="row">
          <div class="col-sm-4 image px-0 mt-3 text-center">
             <img src="{{url('images/img-3.gif')}}"> 
          </div>
          <div class=" col-sm-8 ">
                <div class="shadow-sm p-1 mb-2 bg-body rounded col-sm-12">
                    <strong>Only New Students!</strong>
                    <input class="checkbox circled text-end " checked type="checkbox" id="checkbox-circled-1">
                </div>
                @if (session()->has('success'))
                       <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('success') }}
                       </div>
                @endif 
                <form action="/studentRegister" method="POST">          
                  <div class="row ">  
                        @csrf
                        <div class="input-group input-group-xs mb-3 col-sm-6">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-user"></i></span>
                            <input type="text" id="firstname"  placeholder="Enter Firstname" class="form-control @error('firstname') is-invalid @enderror" required name="firstname" value="{{ old('firstname') }}">
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                   
                        <div class="input-group input-group-xs mb-3 col-sm-6">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-user"></i></span>
                            <input type="text" id="lastname" placeholder="Enter Lastname" class="form-control @error('lastname') is-invalid @enderror" required name="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-8">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-location-pin"></i></span>
                            <input type="text" id="addres" placeholder="Addres" class="form-control @error('addres') is-invalid @enderror" required name="addres" value="{{ old('addres') }}">
                            @error('addres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-3">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-a"></i></span>
                            <input type="text" id="age" placeholder="Age" class="form-control @error('age') is-invalid @enderror" required name="age" value="{{ old('age') }}">
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-12">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-list-check"></i></span>
                            <select  class="form-control"  name="courcetype" id="courcetype">
                                <option >C++</option>
                                <option >Java</option>
                                <option >Advanced Java</option>
                                <option >Web Development</option>
                                <option >React</option>
                                <option >Mern Stack</option>
                                <option >Pyhton</option>	
                                <option >Microsoft office</option>	
                                <option >Flutter</option>	
                                <option >Game Development</option>	
                                <option >Graphics Design</option>	
                            </select>
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-8">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-envelope-circle-check"></i></span>
                            <input type="email" id="email" placeholder="ex, example@gmail.com" class="form-control @error('email') is-invalid @enderror" required name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-4">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-clock"></i></span>
                            <select class="form-control" id="coursetime" name="coursetime">
                                <option>2:30 -- 4:00</option>
                                <option>4:30 -- 6:00</option>
                                <option>7:30 -- 9:00</option>
                                <option>9:30 -- 11:00</option>
                                <option>11:30 -- 1:00</option>		
                            </select>
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-8">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" id="phonenumber" placeholder="Enter Phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" required name="phonenumber" value="{{ old('phonenumber') }}">
                            @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-5">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-venus-mars"></i></span>
                            <select class="form-control" id="sex" name="sex">
                                <option>Male</option>
                                <option>Femal</option>		
                            </select>
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-5">
                            <span class="input-group-text bg-default" id="inputGroup-sizing-sm"><i class="fa-solid fa-calendar-check"></i></span>
                            <select class="form-control" id="day" name="day">
                                <option>Monday</option>
                                <option>Tuesday</option>	
                                <option>Wednesday</option>
                                <option>Saturday-Morning</option>
                                <option>Saturday-Afternoon</option>	
                            </select>
                        </div>
                        <div class="input-group input-group-xs mb-3 col-sm-12">
                            <label class="text-success col-sm-12 " for=""><i class="fa-solid fa-circle-exclamation"></i> Have you taken any Programming cource Before ?</label>                    
                            <ul class="list-inline col-sm-12" id="previousCourse" name="previousCourse" >
                              <div class="row"> 
                                <div class="radio info offset-sm-1 col-sm-2">
                                    <input type="radio" checked name="previousCourse" value="No" >
                                    <label for="No">No</label>
                                </div>                            
                                <div class="radio pink col-sm-2">
                                    <input type="radio" name="previousCourse" value="Yes" >
                                    <label for="Yes">Yes</label>
                                </div>                        
                                <div class="col-sm-4" style="text-align: right">
                                    <button type="submit" class="btn btn-primary">{{ __(' Submit') }}</button>
                               </div>
                              </div>
                            </ul>                                   
                       
                        
                        </div>           
                  </div> 
                </form>  
                  
          </div>       
       </div>
    </div>

@endsection