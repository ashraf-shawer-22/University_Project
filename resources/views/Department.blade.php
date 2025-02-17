<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <link rel="stylesheet" href="{{url('css/Departments.css')}}">
    <title>Departments Page</title>
</head>
<body>
    <div class="aside">
        <div class="sidebar">
            <h2>smart dashboard</h2>
            <a href="{{ route('overview') }}" >
                <i class="fas fa-th-large"></i>
                <h3>overview</h3>
            </a>
            <a href="#" class="active">
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
            <a href="#">
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
            <h1>Departments</h1>
        </div>
        <div class="card-container">
            <div class="card">
                <h2>Computer Science</h2>
                @if ($CS)
                <p>Head Master: <span class="highlight">Dr. {{ $CS }}</span></p>
                @else
                <p>Head Master: <span class="highlight">N/A</span></p>
                @endif
                <p>Total Students: <span class="highlight">{{ $cs_student_count }}</span></p>
            </div>
            <div class="card">
                <h2>Information Systems</h2>
                @if ($IS)
                <p>Head Master: <span class="highlight">Dr. {{ $IS }}</span></p>
                @else
                <p>Head Master: <span class="highlight">N/A</span></p>
                @endif
                <p>Total Students: <span class="highlight">{{ $is_student_count }}</span></p>
            </div>
            <div class="card">
                <h2>Artificial Intelligence</h2>
                @if ($AI)
                <p>Head Master: <span class="highlight">Dr. {{ $AI }}</span></p>
                @else
                <p>Head Master: <span class="highlight">N/A</span></p>
                @endif
                <p>Total Students: <span class="highlight">{{ $ai_student_count }}</span></p>
            </div>
            <div class="card">
                <h2>BioInformatic</h2>
                @if ($BI)
                <p>Head Master: <span class="highlight">Dr. {{ $BI }}</span></p>
                @else
                <p>Head Master: <span class="highlight">N/A</span></p>
                @endif
                <p>Total Students: <span class="highlight">{{ $bi_student_count }}</span></p>
            </div>
        </div>
    </div>
</body>

</html>
