<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif




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

                    <tr>@php
                        $i = 1;
                    @endphp
                        @foreach ($employees as $employee)
                            <td width="30">{{ $i++ }}</td>
                            <td><img src="{{ asset('employee/' . $employee->image) }}" height="40" width="40">
                            </td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->address }}</td>
                            <td width="150">
                                <a href="{{ route('employee.edit', $employee->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('employee.delete', $employee->id) }}" class="btn btn-danger btn-sm show_confirm"
                                    id="delete">Delete</a>
                            </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  }) 


    });

  });
  
</script>

</html>
