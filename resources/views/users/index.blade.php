<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/ueab_logo.png">
    <title>UEAB Student-Lecturer Evaluation System</title>
   
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"> -->
    <!-- <script src="./assets/js/jquery.min.js"></script> -->
    <!-- <script src="./assets/js/bootstrap.min.js"></script> -->
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{url('/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/dashboard.css')}}" rel="stylesheet">
     <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="../sweet.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
       
        .round{
          width:25px;
          height:25px;
          border-radius:50%;
          position:relative;
          background:red;
          display:block;
          padding:0.3rem 0.2rem !important;
          margin:0.3rem 0.2rem !important;
          left:0px;
          z-index: 99 !important;
        }
        .round > span {
          color:white;
          /* display:block; */
          text-align:center;
          margin-right:10px;
          margin-top:-20px;
          margin-left:9px;
          margin-bottom:10px;
          font-size:1rem !important;
          padding:10 !important;
        }
      
        }
       
    </style>

  </head>

<script type="text/javascript">
function inserts(id)

     {
        window.location.href='deactivate.php?id='+id;
     
}
</script>	
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#330066">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
 <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello
 {{$data->name}}
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
          <li><a href="logout"  style="color:#FFFFFF"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
            <!-- <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li> -->
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php" style="background:#330066">Dashboard <span class="sr-only">(current)</span></a></li>
			<!-- find users' image if image not found then show dummy image -->
			
			<!-- check users profile image -->
		
            <li><a href="#"><img style="border-radius:50px" src="" width="100" height="100" alt="not found"/></a></li>
		
			<li><a href="#"><img style="border-radius:50px" src="../images//" width="100" height="100" alt="not found"/></a></li>
		
			
      <li>
          <a href="" style="color:#330066"><span class="glyphicon glyphicon-lock"></span>Update Password</a>
      </li>

      <li>
          <a href="" style="color:#330066"><span class="glyphicon glyphicon-user"></span>My Profile</a>
      </li>
      <!-- <li>
          <a href="index.php?info=update_profile" style="color:#330066"><span class="glyphicon glyphicon-asterisk"></span>Update Profile</a>
      </li> -->


      <li>
          <a href="" style="color:#330066"><span class="glyphicon glyphicon-check"></span>Selected Courses</a>
      </li>


      <li>
          <a href="" style="color:#330066"><span class="glyphicon glyphicon-thumbs-up"></span>Evaluate Here!</a>
      </li>

      <li>
          <a href="" style="color:#330066"><span class="glyphicon glyphicon-envelope"></span>Enquire</a>
      </li>
      <li>
          <a href="{{url('student/calender')}}" style="color:#330066"><span class="glyphicon glyphicon-calendar"></span>Calendar</a>
      </li>
      <li>
        
 
 <a href="" style="color:#330066">
<span class='glyphicon glyphicon-bell' style='color:#330066;'>
                    <div class="round" id="bell-count" data-value =<span></span>Notifications</div>
              
                </span> </a> 
                     
                    
                     
                   
                        <!--old Messages-->
                       
                       
                        <!--old Messages-->
                     
                    
                     </div>
   <!-- <a href="index.php?info=notification" style="color:#330066"><span class="glyphicon glyphicon-phone"></span>Notification<i class="fa fa-bell"   id="over" data-value ="<style="z-index:-99 !important;font-size:20px;color:green;margin:0.5rem 0.4rem !important;"></i></a> -->

 <!-- <li> -->
 <!-- <li><a href="logout.php"  style="color:#330066"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li> -->
 <!-- </li>  -->

          </ul>
         
         
        </div>
		  
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    

                 
                 <!-- // include('scripts.php'); --> 
      </div>
    </div>
  </div>
      @yield('content')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

<script>

<script>
$(document).ready(function(){
    var ids = new Array();
    $('#over').on('click',function(){
           $('#list').toggle();  
       });

   //Message with Ellipsis
   $('div.msg').each(function(){
       var len =$(this).text().trim(" ").split(" ");
      if(len.length > 12){
         var add_elip =  $(this).text().trim().substring(0, 65) + "…";
         $(this).text(add_elip);
      }
     
}); 


   $("#bell-count").on('click',function(e){
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');
        
        if(belvalue == ''){
         
          console.log("inactive");
        }else{
          $(".round").css('display','none');
          $("#list").css('display','block');
          
          // $('.message').each(function(){
          // var i = $(this).attr("data-id");
          // ids.push(i);
          
          // });
          //Ajax
          $('.message').click(function(e){
            e.preventDefault();
              $.ajax({
                url:'./connection/deactive.php',
                type:'POST',
                data:{"id":$(this).attr('data-id')},
                success:function(data){
                 
                    console.log(data);
                    location.reload();
                }
            });
        });
     }
   });

   $('#notify').on('click',function(e){
        e.preventDefault();
        var name = $('#course_id').val();
        var ins_msg = $('#message').val();
        if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
          var form_data = $('#frm_data').serialize();
        $.ajax({
          url:'./connection/insert.php',
                type:'POST',
                data:form_data,
                success:function(data){
                    location.reload();
                }
        });
        }else{
          alert("Please Fill All the fields");
        }    
   });
});
</script>
</body>
</html>