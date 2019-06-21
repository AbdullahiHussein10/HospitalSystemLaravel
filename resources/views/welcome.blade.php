

<div class="sidebar">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card bg-dark">
                <div class="card-header text-info">DASHBOARD</div>

                <div class="card-body">
                <a href="/studentdetails">Students Detail</a>
                </div>


               
                <div class="card-body">
                    <a class="btn btn dropdown-toggle text-info" type="button" data-toggle="dropdown">Courses</a>
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="/course">Manage Courses</a></li>
                        <li><a href="/manage_student_subjects">Manage Students Courses</a></li>
                    </ul>
                    </div> 
                    


                <div class="card-body">
                <a href="/studentsperfomance">Student Grades</a>
                </div>

                <div class="card-body">
                <a href="/fees">Fees</a>
                </div>

                <div class="card-body">
                <a href="/studentsattendance">Student Attendance Record</a>
                </div>

                <div class="card-body">
                <a href="/teachers">Teachers</a>
                </div>

                <div class="card-body">
                <a href="parents">Parents</a>
                </div>

                

                <div class="card-body">
                <a href="/teachers">Teacher-Connect</a>
                </div>
                    
                </div>
            </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1><b>Welcome to the Admin DashBoard!</b></h1>
                    

                    <div class="card-group">
                      <div class="card">
                         <div class="card-body">
                            <div class="bg-primary">
                    <p>STUDENTS</p>  
                    <p>TOTAL: 
                            </div>
                                </div>
                                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="bg-secondary">
                    <p>SUBJECTS</p>  
                    <p>TOTAL:  
                        </div>
                            </div>

                                </div>

                    


                    <div class="card">
                        <div class="card-body">
                             <div class="bg-success">
                    <p>TEACHERS</p>  
                    <p>TOTAL:  
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            </div>
                    
                    <div class="col-md-4">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-primary">
                    <p>PARENTS</p>  
                    <p>TOTAL:  
                                            </div>
                                                </div>


                    
                   
                </div>

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
