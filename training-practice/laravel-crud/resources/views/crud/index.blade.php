<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <h1 class="lead">Student Details</h1>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="mb-3">
                    <button type="button" class="btn btn-dark w-100 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add student
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="{{ route('store') }}" method="post">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Student Register Form</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                <label for="fname">Firstname</label>
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Jhon">
                                            </div>
                                            <div class="col-lg-6 col-md-6 mb-3">
                                                <label for="lname">Lastname</label>
                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe">
                                            </div>
                                            <div class="col-lg-12 col-md-12 mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Example@gmail.com">
                                            </div>
                                            <div class="col-lg-12 col-md-12 mb-3">
                                                <label for="mobile">Mobile</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="(+XX) XXX XXXX XXX">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-dark">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>fullname</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->mobile }}</td>
                    <td>
                        <a href="{{ route('students.edit', ['student' => $student->id]) }}">Edit</a> |
                        
                        <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this student?')) { document.getElementById('delete-form-{{ $student->id }}').submit(); }">Delete</a>
                    
                        <form id="delete-form-{{ $student->id }}" action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>                    
                </tr>
            @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>