<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>

   <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">CRUD EDIT PROJECT</div>
        </div>  
    </div>




    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Employees</div>
               <div>
                  <a href="{{ route('employee.index') }}" class="btn btn-primary">Back</a>
                </div>
        </div>


        <form action="{{ route('employee.update',$employee->id) }}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" value="{{ $employee->name }}">
                        @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror                       
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="name" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ $employee->email  }}">
                        @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>    
                        @enderror                       
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="name" placeholder="Enter Address" class="form-control" value="{{ $employee->address }}">
                                             
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Image</label>
                        <input type="file" name="image" id="name"  class="form-control"><br>
                        <img src="{{ asset('employee/'.$employee->image) }}" height="70" width="70">
                                             
                    </div>
                    
                        <button class="btn btn-danger mt-3">Update Employee</button>



        </form>
    </div>


   
</body>
</html>       