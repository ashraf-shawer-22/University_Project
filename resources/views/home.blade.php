<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <link rel="stylesheet" href="{{url('css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Smart Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo"><img src="{{ asset('images/smart dashboard Logo 4.png') }}" alt="">
        <div class="text">
            <p><span>smart</span>
                <span>dashboard</span>
            </p>
        </div></div>

        <div class="form">
            <form action="">
                <input type="text" placeholder="search">
                <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class= "fac-img">
            <img src="{{ asset('images/collegue logo.jpg') }}">
        </div>
    </div>
    <div class="content">
        <div class="aside">
                <div class="sidebar">
                    <a href="{{ route('overview') }}" class="active">
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
                    <a href="{{ route('instructor') }}">
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

        <div class="overview">
            <div class="stats-cards">
                <div class="card">
                    <h3>Total Students</h3>
                    <p>{{ $students }}</p>
                </div>
                <div class="card">
                    <h3>Total Teachers</h3>
                    <p>{{ $instructors }}</p>
                </div>
                <div class="card">
                    <h3>Total Courses</h3>
                    <p>{{ $courses }}</p>
                </div>
                <div class="card">
                    <h3>Faculty Rooms</h3>
                    <p>100</p>
                </div>
            </div>
            <div class="attendance">
                <div class="card-header">
                    <h2>Attendance Rate</h2>
                    <span class="attendance-rate">87% <small style="color: #4caf50">+5.25%</small></span>
                </div>
                <p>Average attendance over the last 5 months</p>
                <div class="date-label">May 27</div>
                <div class="chart-container">
                    <svg class="chart" viewBox="0 0 300 160">
                        <polyline points="0,20 50,100 100,70 150,90 200,30 250,10 300,10 350,50 400,10" class="chart-line" />
                    </svg>
                    <div class="chart-labels">
                        <span>Apr</span>
                        <span>May</span>
                        <span>June</span>
                        <span>July</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="calendar-container">
                <div class="calendar-header d-flex justify-content-between align-items-center">
                    <span class="btn-nav" onclick="prevMonth()">❮</span>
                    <span id="calendar-month"></span>
                    <span class="btn-nav" onclick="nextMonth()">❯</span>
                </div>
                <div class="calendar-body fw-bold ">
                    <div class="row text-center">
                        <div class="col">Sun</div>
                        <div class="col">Mon</div>
                        <div class="col">Tue</div>
                        <div class="col">Wed</div>
                        <div class="col">Thu</div>
                        <div class="col">Fri</div>
                        <div class="col">Sat</div>
                    </div>
                    <div id="calendar-days" class="row text-center"></div>
                </div>
            </div>
        </div>

    </div>


    <script>
        let currentDate = new Date();

        function renderCalendar() {
            const monthYear = document.getElementById('calendar-month');
            const calendarDays = document.getElementById('calendar-days');
            calendarDays.innerHTML = '';

            const month = currentDate.getMonth();
            const year = currentDate.getFullYear();

            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();

            monthYear.textContent = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });

            let row = document.createElement('div');
            row.classList.add('row');

            for (let i = 0; i < firstDay; i++) {
                row.appendChild(createEmptyCell());
            }

            for (let day = 1; day <= lastDate; day++) {
                const col = document.createElement('div');
                col.classList.add('col', 'calendar-day', 'p-2');
                col.textContent = day;

                if (year === new Date().getFullYear() && month === new Date().getMonth() && day === new Date().getDate()) {
                    col.classList.add('today');
                }

                row.appendChild(col);

                if ((firstDay + day) % 7 === 0 || day === lastDate) {
                    calendarDays.appendChild(row);
                    row = document.createElement('div');
                    row.classList.add('row');
                }
            }
        }

        function createEmptyCell() {
            const col = document.createElement('div');
            col.classList.add('col', 'calendar-day', 'p-2');
            return col;
        }

        function prevMonth() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        }

        function nextMonth() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        }

        renderCalendar();
    </script>


</body>
</html>
