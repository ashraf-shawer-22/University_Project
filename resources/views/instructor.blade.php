<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url ('css/all.min.css') }}">
        <link rel="stylesheet" href="{{url ('css/normalize.css') }}">
        <link rel="stylesheet" href="{{url ('css/instructor.css') }}">
    <title>instructors Page</title>

</head>

<body>
    <div class="main-header">
        <div class="logo"><img src="{{url ('/images/smart dashboard Logo 4.png') }}" alt="">
            <div class="text">
                <p><span>smart</span>
                    <span>dashboard</span>
                </p>
            </div>
        </div>

        <div class="form">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Search" required>
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="fac-img">
            <img src="{{url ('images/collegue logo.jpg') }}">
        </div>
    </div>

    <div class="main-content">
        <div class="aside">
            <div class="sidebar">
                <a href="{{ route('overview') }}">
                    <i class="fas fa-th-large"></i>
                    <h3>overview</h3>
                </a>
                <a href="{{ route('department.index') }}">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <h3>departments</h3>
                </a>
                <a href="{{ route('courses.index') }}">
                    <i class="fas fa-book-open"></i>
                    <h3>Courses</h3>
                </a>
                <a href="{{ route('student.index') }}">
                    <i class="fas fa-user-graduate"></i>
                    <h3>Students</h3>
                </a>
                <a href="{{ route('instructor') }}" class="active">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>instructor</h3>
                </a>

                <a href="{{ route('attendance.index') }}">
                    <i class="fa-solid fa-clipboard-user"></i>
                    <h3>attendance</h3>
                </a>
                <a href="{{ route('financial.financial') }}">
                    <i class="fa-solid fa-receipt"></i>
                    <h3>financial reports</h3>
                </a>
                <a href="{{ route('event.index') }}">
                    <i class="fa-solid fa-calendar-days"></i>
                    <h3>event</h3>
                </a>
            </div>
        </div>
        <div class="holder">
            <div class="header">
                <h1>Instructors </h1>
                <button class="b" onclick="history.back()">Back</button>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="image">
                        <img src="{{url ('/images/cs.jpg') }}" alt="" style="height: 90px;">
                        <div class="name">
                            <span>(CS)</span>
                            <a href="{{ route('instructor.cs') }}">
                                <h2>Computer Science</h2>
                            </a>

                        </div>
                    </div>


                </div>
                <div class="card">
                    <div class="image">
                        <img src="{{url ('/images/is.webp') }}" alt="">
                        <div class="name">
                            <span>(IS)</span>
                            <a href="{{ route('instructor.is') }}">
                                <h2>Information Systems</h2>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="{{url ('/images/ai.jpg') }}" alt="">
                        <div class="name">
                            <span>(AI)</span>
                            <a href="{{ route('instructor.ai') }}">
                                <h2>Artificial Intelligence</h2>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="{{url ('/images/bio.jpg') }}" alt="">
                        <div class="name">
                            <span>
                                (BIO)
                            </span>
                            <a href="{{ route('instructor.bio') }}">
                                <h2 >Bioinformatics</h2>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>




</html>
