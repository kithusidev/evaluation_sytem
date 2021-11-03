<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/ueab_logo.png">
    <title>UEAB Evaluation System Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('css/metisMenu.min.css')}}" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="{{url('css/sb-admin-2.css')}}" rel="stylesheet">
    <!-- <script src="../css/sweet.js"></script>
	<script src="../css/jquery.min.js"></script> -->

    <!-- Custom Fonts -->
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    	<script src="{{url('css/sweet.js')}}"></script>
	<script src="{{url('css/jquery.min.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="background:#330066" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">UEAB Student-Lecturer Evaluation System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- <li class="dropdown"> -->
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#"> -->
                        <!-- <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> -->
                    <!-- </a> -->
                    <!-- <ul class="dropdown-menu dropdown-user"> -->
                        
                        <!-- <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i>Change Password</a> -->
                        <!-- </li> -->
                        <li class="divider"></li>
                        <li style="color:#ffffff"><a href="logouthod`"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    <!-- </ul> -->
                    <!-- /.dropdown-user -->
                <!-- </li> -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" style="background:#330066" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        

                    
                    
						<li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Faculty<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=add_faculty"><i class="fa fa-plus fa-fw"></i> Add Faculty</a>
                                </li>
								 <li>
                                    <a href="dashboard.php?info=show_faculty"><i class="fa fa-eye"></i> Manage faculty</a>
                                </li> 
                                 <li>
                                    <a href="dashboard.php?info=detail_lec"><i class="fa fa-book"></i> faculty Details</a>
                                </li> 
                                <li>
                                    <a href="dashboard.php?info=print_faculty"><span class="glyphicon glyphicon-print"></span> Print Lecturer List</a>
                                </li>                          
							</ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
						
						<li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                             
								<!-- <li>
                                <a href="dashboard.php?info=add_student"><i class="fa fa-plus fa-fw"></i> Add student</a>
                                </li> -->
                                
                                
                                 <li>
                                    <a href="dashboard.php?info=display_student"><i class="fa fa-eye"></i> Manage Student</a>
                                </li> 	

                                                                 <li>
                                    <a href="dashboard.php?info=print_student"><span class="glyphicon glyphicon-print"></span> Print Student List</a>
                                </li> 			
                                <li>
                                    <a href="dashboard.php?info=add_student_courses"><i class="fa fa-plus fa-fw"></i> Add student Courses</a>
                                </li>

                                <li>
                                    <!-- <a href="dashboard.php?info=say"><i class="fa fa-plus fa-fw"></i>Multiple Add student Courses</a> -->
                                </li>


							</ul>
                        </li>
						
						
		
		<!-- feedback-->
		<!-- <li>
         <a href="#"><i class="fa fa-user fa-pencil"></i>Feedback<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
                             
<li><a href="dashboard.php?info=feedback"><i class="fa fa-eye"></i> feedback</a></li>
 <li><a href="dashboard.php?info=feedback_average"><i class="fa fa-eye"></i> feedback Average</a></li> 
<li><a href="dashboard.php?info=sorted_results"><i class="fa fa-group fa-fw"></i> Lecture Groups Results</a></li>	
<li><a href="dashboard.php?info=wine"><i class="fa fa-group fa-fw"></i> Advanced Groups Results</a></li> 
<li><a href="dashboard.php?info=full"><i class="fa fa-book fa-fw"></i> Lecturer Full Results</a></li>
							             
							</ul>
                        </li> 
                        -->
		<!--feedback end-->
						
<!-- 					
		<li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Schools<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                             
								 <li>
                                    <a href="dashboard.php?info=display_school"><i class="fa fa-eye"></i> Manage School</a>
                                </li> 				
                                <li>
                                    <a href="dashboard.php?info=add_school"><i class="fa fa-plus fa-fw"></i> Add a School</a>
                                </li>

							</ul>
                        </li> -->

<!-- 
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>HOD<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                             
								 <li>
                                    <a href="dashboard.php?info=display_hod"><i class="fa fa-eye"></i> Manage HOd</a>
                                </li> 				
                                <li>
                                    <a href="dashboard.php?info=add_hod"><i class="fa fa-plus fa-fw"></i> Add a HOD</a>
                                </li>

							</ul>
                        </li> -->


<!-- 		
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                             
								 <li>
                                    <a href="dashboard.php?info=display_department"><i class="fa fa-eye"></i> Manage Departments</a>
                                </li> 				
                                <li>
                                    <a href="dashboard.php?info=add_department"><i class="fa fa-plus fa-fw"></i> Add a Department</a>
                                </li>

							</ul>
                        </li> -->
						
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i>Courses<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                             
								 <li>
                                    <a href="dashboard.php?info=display_courses"><i class="fa fa-eye"></i> Manage Courses</a>
                                </li> 				
                                <li>
                                    <a href="dashboard.php?info=add_courses"><i class="fa fa-plus fa-fw"></i> Add Courses</a>
                                </li>
                                <li>
                                    <a href="dashboard.php?info=display_semester_courses"><i class="fa fa-eye"></i> Manage Semester Courses</a>
                                </li>
                                <li>
                                    <a href="dashboard.php?info=add_semester_courses"><i class="fa fa-plus fa-fw"></i> Add Semester Courses</a>
                                </li>
                                <li>
                                    <a href="dashboard.php?info=print_semester_courses"><span class="glyphicon glyphicon-print"></span>Print Semester Courses</a>
                                </li>
							</ul>
                        </li>
						
                        <li>
                            <a href="#"><i class="fa fa-check fa-fw"></i>Majors<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                             
								 <li>
                                    <a href="dashboard.php?info=display_major"><i class="fa fa-eye"></i> Manage Majors</a>
                                </li> 				
                                <li>
                                    <a href="dashboard.php?info=add_major"><i class="fa fa-plus fa-fw"></i> Add Major</a>
                                </li>

							</ul>
                        </li>
                        <li><a href="calendar.php"><i class="fa fa-calendar fa-fw"></i>Calendar</a></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw">Logout</i></a></li>
				        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  
				
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>

</body>

</html>
