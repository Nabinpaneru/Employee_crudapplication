<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">CRUD PROJECT</div>
        </div>  
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Employees</div>
               <div>
                  <a href="{{ route('employee.create') }}" class="btn btn-primary">Create</a>
                </div>
        </div>
    



        <div class="card border-0 shadow-lg">
            <div class="card-body ">
                <table class="table table-striped">
                    <tr>
                        <th width="30">ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th width="150">Action</th>
                    </tr>

                    <tr>
                        <td width="30">1</td>
                        <td>Image</td>
                        <td>nabin</td>
                        <td>nabinpaneru141@gmail.com</td>
                        <td>Thankots</td>
                        <td width="150">
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </table> 

            </div>       
        </div> 
    </div>        

</body>
</html>