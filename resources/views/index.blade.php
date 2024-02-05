<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="row">
            <div class="col-mb-6">
                <h1>Student Infor</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stu as $stu_data)
                            <tr>
                                <td>{{ $stu_data->id }}</td>
                                <td>{{ $stu_data->stuName }}</td>
                                <td>{{ $stu_data->stuGender }}</td>
                                <td>{{ $stu_data->stuPhone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-mb-6">
                <h1>Subject Infor</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject name</th>
                            <th scope="col">Student</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sub as $stu_data)
                            <tr>
                                <td>{{ $stu_data->id }}</td>
                                <td>{{ $stu_data->subName }}</td>
                                <td>{{ $stu_data->tbl_subject->stuName }}</td>
                                <td>{{ $stu_data->tbl_subject->stuPhone }}</td>
                                <td>{{ $stu_data->tbl_subject->stuGender }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
