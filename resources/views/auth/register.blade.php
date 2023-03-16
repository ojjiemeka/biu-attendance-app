@extends('layouts.auth.auth')

@section('content')
<div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Register</h5>
                                        <p>Create a new account.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                
                            <div class="p-3">
                                <form class="needs-validation" novalidate action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">First name</label>
                                        <input type="text" class="form-control" name="first_name" id="username" placeholder="Enter First name" required>
                                        <div class="invalid-feedback">
                                            Please First name
                                        </div>  
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Middle name</label>
                                        <input type="text" class="form-control" name="middle_name" id="username" placeholder="Enter Middle name">
                                        <div class="invalid-feedback">
                                            Please enter middle name
                                        </div>  
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="last_name" id="username" placeholder="Enter Last name" required>
                                        <div class="invalid-feedback">
                                            Please Enter Last name
                                        </div>  
                                    </div>

                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email" required>  
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>      
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" name="phone" id="username" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" placeholder="09075644321" required>
                                        <div class="invalid-feedback">
                                            Please Enter Phone Number
                                        </div>  
                                    </div>
            
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>       
                                    </div>

                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>       
                                    </div>
  
                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                    </div>       
                                </form>
                            </div>
        
    
                    <div class="mt-5 text-center">
                        
                        <div>
                            <p>Already have an account ? <a href="{{route('login')}}" class="fw-medium text-primary"> Login</a> </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end container-fluid -->
</div>
@endsection
