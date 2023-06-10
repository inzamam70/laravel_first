

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP PDO CURD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mat-4">
              
                <div class="card">
                    <div class="card-header">
                        <h1>PHP PDO CURD
                            <a href="{{ url('student-add') }}" class="btn btn-primary float-end">Add Student</a>
                        </h1>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Course</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                         
                                        <tr>
                                            <td>id</td>
                                            <td>full name</td>
                                            <td>email</td>
                                            <td>phone no</td>
                                            <td>course</td>
                                            <td>
                                                <a href="{{ url('edit-student') }}"class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="">
                                                    <button  type="submit" name="delete_student" class="btn btn-danger" >Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                  
                               
                                    <tr>
                                        <td colspan="5">No Recorded Found</td>
                                    </tr>
                              

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>