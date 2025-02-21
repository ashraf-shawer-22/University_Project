<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url ('css/all.min.css') }}">
    <link rel="stylesheet" href="{{url ('css/normalize.css') }}">
    <link rel="stylesheet" href="{{url ('css/ai_instructor.css') }}">
    <title>AI instructors</title>
</head>

<body>
    <div class="aside">
        <div class="sidebar">
            <h2>smart dashboard</h2>
            <a href="{{ route('overview') }}">
                <i class="fas fa-th-large"></i>
                <h3>overview</h3>
            </a>
            <a href="{{ route('department.index') }}">
                <i class="fa-solid fa-table-cells-large"></i>
                <h3>departments</h3>
            </a>
            <a href="#">
                <i class="fas fa-book-open"></i>
                <h3>Courses</h3>
            </a>
            <a href="#">
                <i class="fas fa-user-graduate"></i>
                <h3>Students</h3>
            </a>
            <a href="{{ route('instructor') }}" class="active">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>instructor</h3>
            </a>

            <a href="#">
                <i class="fa-solid fa-clipboard-user"></i>
                <h3>attendance</h3>
            </a>
            <a href="#">
                <i class="fa-solid fa-receipt"></i>
                <h3>financial reports</h3>
            </a>
            <a href="#">
                <i class="fa-solid fa-calendar-days"></i>
                <h3>event</h3>
            </a>
        </div>
    </div>
    <div class="content">
        <div class="header">
            <h1>instructors</h1>
        </div>


        <div>
            <h3>Head of Department: {{ $headOfDepartment }}</h3>

            <table class="table table-bordered">
                <caption>IS Instructors</caption>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Salary</th>
                        <th>Course Name</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($instructors as $instructor)
                        <tr>
                            <td>{{ $instructor->instructor_id }}</td>
                            <td>{{ $instructor->full_name }}</td>
                            <td>{{ $instructor->age }}</td>
                            <td>{{ $instructor->salary }}</td>
                            <td>{{ $instructor->course->course_name ?? 'N/A' }}</td>
                            <td>{{ $instructor->department->department_name ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>

</html>
