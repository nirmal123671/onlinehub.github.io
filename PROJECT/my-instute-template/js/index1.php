



<?php include('config.php'); 
$aryDetail=$db->getRow("select * from  userdetail where id='".$iInstituteId."'"); 


?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('inc.meta.php'); ?>
 
 
<style>

.kd-pagesection .thememargin h3 {
    color: #fff;
}

.kd-pagesection .thememargin p {
    color: #fff;
}

.mobileapps {   
    background-color: #96133B !important;
}

.mobilenewss .mobilbtn1 {
    background-color: #E91E63 !important;
}

.panel-default > .panel-heading {
    background-color: #96133B !important;
}

.newsslets  h1 a{
	color: #333;
	font-size: 18px;
}

#first-slider h1 { 
    color: #fff !important;
}

.contentss12 {
    background-color: #EEE;           
}

</style> 
 
 
 
</head>

<body>


<div class="page-container">
<?php include('inc.header.php'); ?>


 
 <div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
			  <?php	$i=0;
		$aryList=$db->getRows("select * from institute_gallery  where  userid ='".$iInstituteId."' and status = '1' order by id desc");
		foreach($aryList as $iList) { $i=$i+1; ?>
            <div class="item <?php if($i=='1') { echo "active"; } ?> slide<?php echo $i; ?>">
                <div class="row"><div class="container">
                    <div class="col-md-3 text-right">
                      <img src="uploads/<?php echo $iList['image']; ?>" >
                    </div>
                    <div class="col-md-9 text-left">
                        <h1 data-animation="animated bounceInDown"><?php echo $iList['title']; ?></h1>
                          <h3><?php echo $iList['description']; ?></h3>          
                     </div>
                </div></div>
             </div>
			 
		<?php } ?>  
		
            <!-- Item 2 -->
          
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->                     
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>
 
<div id="demoinsitutess">
<?php if($iGetInstituteDetailSetting['is_show_about_us']=='1') { ?>
	<div class="container sss1">
		<div class="col-md-6 col-sm-6">
		
			<div class="institutee">
				<h1> <span class="insidf">ABOUT THE UNIVERSITY</span></h1>
				<p>
				   <?php echo substr($iGetInstituteDetailSetting['about_content'],0,700); ?>
				</p>
			<div class="worldss1">
				<div class="col-md-6 col-sm-6">
					<img src="uploads/<?php echo $iGetInstituteDetailSetting['about_image']; ?>">
					
					
					<div class="settdsr">
					<button type="submit" name="submit" class="buttonsread" >
					    READ MORE
					</button>	
					</div>
					
				</div>
				
			</div>
			</div>
	
		</div>
		<div class="col-md-6 col-sm-6">
		    <div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="boxexx" align="center">	
					    <p><i class="fa fa-book" aria-hidden="true"></i></p>
						<h3>ONLINE COURSES</h3>
						<h4>Contrary to popular belief, Lorem Ipsum. </h4>
						<h5>VIEW MORE</h5>                 
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="boxexx" align="center">	
					    <p><i class="fa fa-book" aria-hidden="true"></i></p>
						<h3>BEST TEACHERS</h3>
						<h4>Contrary to popular belief, Lorem Ipsum. </h4>
						<h5>VIEW MORE</h5>                 
					</div>
				</div>
			</div>
			<div class="row boddcx"> 
				<div class="col-md-6 col-sm-6">
					<div class="boxexx" align="center">	
					    <p><i class="fa fa-book" aria-hidden="true"></i></p>
						<h3>OTHER ACTIVITIES</h3>
						<h4>Contrary to popular belief, Lorem Ipsum. </h4>
						<h5>VIEW MORE</h5>                 
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="boxexx" align="center">	
					    <p><i class="fa fa-book" aria-hidden="true"></i></p>
						<h3>NATIONAL AWARDS</h3>
						<h4>Contrary to popular belief, Lorem Ipsum. </h4>
						<h5>VIEW MORE</h5>                 
					</div>
				</div>
			</div> 
		</div>
	</div>

	
	
<div class="box-area">              
	<div class="container">
		<div class="row">  
		
<div class="col-md-6">
<div class="panel panel-default">                  
<div class="panel-heading">Latest Result</div>                                                 
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1" style="overflow-y: hidden; height: 560px; list-style: none;">
<?php
		$iResultLInks=$db->getRows("select * from result_link where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
	foreach($iResultLInks as $iResLnk)
			{	 				
			 ?>
<li style="" class="news-item">                                           
<table cellpadding="4">
<tbody><tr>

<div class="col-md-4 newsslets1">
<img src="images/news.png" width="160" class="img-circle12">  
</div>

<div class="col-md-8 newsslets">
<?php if($iResLnk['select_site']=='1') {	?>
	<h1><a href="uploads/<?php echo $iResLnk['pdf']; ?>" target="_blank"><?php echo $iResLnk['title']; ?></a></h1>
	<?php  } else { ?>
	<h1><a href="<?php echo $iResLnk['website_link']; ?>" target="_blank"><?php echo $iResLnk['title']; ?></a></h1>
<?php  }  ?>
	<h3><em><?php echo date('M d , Y', strtotime($iList['expire_date'])); ?></em></h3>
	
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit... </h4>



</div>

</tr>
</tbody>
</table>
</li>
			<?php } ?>


</ul>

                    <div class="settdsr1"> 
					<button type="submit" name="submit" class="buttonsread" >
					    VIEW ALL
					</button>	
					</div>


</div>
</div>
</div>


	
	
</div>
</div>


<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">Upcoming Vacancy</div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo1" style="overflow-y: hidden; height: 560px; list-style: none;">
 <?php
		$iLatestVaccancy=$db->getRows("select * from latest_vacancy where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
	foreach($iLatestVaccancy as $iLatVac)
			{						
							
			 ?>
<li style="" class="news-item">                                         
<table cellpadding="4">
<tbody><tr>

<div class="col-md-4 newsslets1">
<img src="images/news.png" width="160" class="img-circle12">  
</div>

<div class="col-md-8 newsslets">
<?php  if($iLatVac['select_site']=='1') {	?>
	<h1><a href="uploads/<?php echo $iLatVac['pdf']; ?>" target="_blank"><?php echo $iLatVac['title']; ?></a></h1>
	<?php  } else { ?>
	<h1><a href="<?php echo $iLatVac['website_link']; ?>" target="_blank"><?php echo $iLatVac['title']; ?></a></h1>
	<?php } ?>
	<h3><em><?php echo date('M d , Y', strtotime($iLatVac['expire_date'])); ?></em></h3>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit... </h4>
</div>

</tr>
</tbody>
</table>
</li>
			 <?php } ?>



</ul>

 <div class="settdsr1">  
					<button type="submit" name="submit" class="buttonsread" >
					    VIEW ALL
					</button>	
					</div>


</div>
</div>
</div>


	
	
</div>
</div>

</div>
	</div>
</div>
<?php }?>

<div class="contentss">                    
	<div class="container">
		<h1> Our Courses </h1> 
		
<div class="row">

<?php
	  if($_SESSION['user_id']!='') { 
 $aryList=$db->getRows("select * from  registeration_cateogry where userid='".$_SESSION['user_id']."'    order by id desc");
	  }	else {
 $aryList=$db->getRows("select * from institute_com_category where userid='".$iInstituteId."'    order by id desc");
 }
 	$ijii=0;
 	foreach($aryList as $iagaList)
 		{ $ijii = $ijii+1;
 	 $iList=$db->getRow("select * from com_category where id = '".$iagaList['sub_category']."' order by id desc"); ?>
      
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/event_course.png" class="" alt="...">
      <div class="caption">
        <h3><a href="detail.php?id=<?php echo $iList['id']; ?>"> <?php echo $iList['categoryname']; ?></a></h3>
        <p> <ul>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>&t=1" class="text-anc11">Mock Test</a> </li>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>" class="text-anc11">Topic Wise</a> </li>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>&t=3" class="text-anc11">PDF Tutorials</a> </li>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>&t=4" class="text-anc11">Video Tutorialst</a> </li>
              </ul></p>
	
		
      
      </div>
    </div>
  </div>
			<?php } ?>
  
</div>

				<div class="row"> 
	                <div class="col-md-12 col-sm-12 settdsr1">      
					<button type="submit" name="submit" class="buttonsread" >
						Browse All Courses <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
					</button>	
					</div>
               </div>

</div>
</div>



<div class="placementssas">                     
	<div class="container">
		<h1> Placements </h1>    
		
<div class="row">

  <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail">
      <img src="images/bottomslider5.jpg" class="" alt="..."> 
       <h2>Student</h2>       
    </div>
  </div>
  
   <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail">
      <img src="images/portfolio_pic2.jpg" class="" alt="..."> 
       <h2>Student</h2>       
    </div>
  </div>
  
   <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail">
      <img src="images/portfolio_pic7.jpg" class="" alt="..."> 
       <h2>Student</h2>       
    </div>
  </div>
			
  
</div>

</div>
</div>



<div class="careeersss">                                 
	<div class="container">
		<h1> Career </h1>    
		
<div class="row">

  <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail">
      <img src="images/bottomslider5.jpg" class="" alt="..."> 
       <h2>Career</h2>         
    </div>
  </div>
  
   <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail">
      <img src="images/portfolio_pic2.jpg" class="" alt="..."> 
       <h2>Career</h2>       
    </div>
  </div>
  
   <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail">
      <img src="images/portfolio_pic7.jpg" class="" alt="..."> 
       <h2>Career</h2>       
    </div>
  </div>
			
  
</div>

</div>
</div>



 <?php if($iGetInstituteDetailSetting['is_vedio_tutorial']=='1') { ?>
<div class="contentss12">                    
	<div class="container">
		<h1>Video Tutorial</h1> 
		
<div class="row">
 <?php  $i=0;	
			 $aryList=$db->getRows("select * from  vedio_competitive where userid='".$iInstituteId."' and status = '1' and is_home = '1' order by id desc limit 0,8"); 
			  foreach($aryList as $iList) {	$i=$i+1;
			 
			  ?> 
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <iframe width="100%" height="190" src="<?php echo $iList['vediourl']; ?>" frameborder="0" allowfullscreen></iframe>
      <div class="caption">
        <h3><?php echo $iList['title']; ?></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		
      </div>
    </div>
  </div>
   <?php } ?>  
  
  
</div>


</div>
</div>
 <?php } ?>

 
 
<div class="mobileapps">

	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-1"></div>  
			<div class="col-md-7 col-sm-7">
				<h1>Learn how to code in <u>swift.</u> <br>
					Funnified and wherever you are.
				</h1>
				<h4>Always wanted to build your own? With Swifty and its.<br> 200+ bite-sized, interactive tutorials, getting started has <br> never been so easy!</h4>
				
			<div class="mobilenewwww1">  	
				<div class="col-md-4 col-sm-4">
					<img src="images/appstore.png" class="imgss" >
				</div>
				
				<div class="col-md-8 col-sm-8">
				    <div class="mobilenewss">
						<form method="post" action="">
							<input type="text" class="mobilbtn" placeholder="Enter mobile" required />
							<button type="submit" name="submit" class="mobilbtn1" <a href="#">Get App Link</a>
							</button>
						</form>
					</div>
				</div>
			
			
			</div>		
				
				
				</div>
			
			<div class="col-md-4 col-sm-4 sssffd" align="center" >
				<img src="images/device2.png" class="imgg1" >
			</div>
		</div>
	</div>
	
</div>



<div class="ourfac_all"> 
	
<div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase">Our Faculty </h3>
                            <p class="p-top-30 half-txt">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. </p>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hi There !</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Martin Smith</h5>
                                <span>founder &amp; ceo</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/elegant-man-with-thumbs-up_1149-1595.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hello World</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Franklin Harbet</h5>
                                <span>HR Manager</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>I love to design</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Linda Anderson</h5>
                                <span>Marketing Manager</span>
                            </div>
                        </div>

                    </div>

                </div>

</div>
 
 

<?php if($iGetInstituteDetailSetting['is_testimonial']=='1') { ?>
<div class="contsddds" style="">         

	<div class="container"> 
		
	<div class="row">
		<h2>What People Say</h2>                                   
		<hr>
	</div>                                           

<div class="carousel-reviews broun-block">                         
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
				
                    <div class="item active">
					<?php  $i=0;	
$iTestimonial=$db->getRows("select * from institute_testimonial where userid='".$iInstituteId."' and status = '1' order by id desc"); 

			  foreach($iTestimonial as $iTestList) {
				  $i=$i+1;
				  $aryLists=$db->getVal("select count(id) from institute_testimonial where userid='".$iInstituteId."' and status='1'");
 			  ?>
                	    <div class="col-md-6 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Hercules</a>
							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
						        <p><?php echo $iTestList['comment']; ?></p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel">
				                <img src="uploads/<?php echo $iTestList['image']; ?>"/>
								<a title="" href="#">Anna</a>
								<i>from Glasgow, Scotland</i>
							</div>
						</div>
			 <?php if($i%2=='0' && $i!=$aryLists) { echo '</div> <div class="item">'; }  } ?>
            			
					
                    </div>
               
				</div>
              
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left"></span>
                </a>
                 
                 <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="fa fa-chevron-right"></span>
                </a>
           
            </div>
        </div>
    </div>
</div>
	</div>

</div>
<?php } ?>



<div 

 
<footer class="bh-footer ">
 <?php include('inc.footer.php'); ?>
</footer>




     <?php include('inc.js.php'); ?>     


 
   <script>
 function subscribeform()
	{
	var sub_fullname = document.getElementById("sub_fullname").value;
	var sub_emailid = document.getElementById("sub_emailid").value;
 		 $.post("ajax.php",  
				       
					   {	
                       "action"	     :	"subscribeemail",
					   sub_fullname	         :	    sub_fullname,
					   sub_emailid	     :	    sub_emailid,
 			      },
		function(data){
			
			if(data	!=	1)
				{	
					$("#subscribemessage").html(data);
				}
			else{	
			
 		 			$("#subscribemessage").html('<p style="color:green;">Submit Successfully.</p>');
					document.getElementById("subscribeform").reset();
					
					}
			});
 }
</script> 

 
   <script>
    $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
</script> 

,<script>
function position() {
    var topdiv = document.getElementsByClassName("top-div")[0];
    var bottomdiv = document.getElementsByClassName("bottom-div")[0];
    topdiv.parentNode.insertBefore(bottomdiv,topdiv);
    topdiv.className = 'bottom-div';
    bottomdiv.className = 'top-div';
}

window.onload = function() {
	
	var scrwid = screen.width;
	 
	if(scrwid<768)
	{
		
	  position();	
		
	}

};


 

</script>
</body>
</html>
<script>

function getregister()
{
	
var mobileno = document.getElementById("mobileno").value;

$.ajax({
type: 'post',
url: 'ajax.php',
data: {
action	: "get_register",
mobileno	: mobileno,
},
success: function( data ) {		

		if(data	!=	1)
				{	
					$("#iMobileError").html(data);
				}
			else{	
			
 		 			$("#iMobileError").html('<p style="color:wheat;">Subscribe Successfully.</p>');
					document.getElementById("mobilenosub").reset();
					
				}

}
});
}
</script>


<script src="http://www.jqueryscript.net/demo/Responsive-jQuery-News-Ticker-Plugin-with-Bootstrap-3-Bootstrap-News-Box/scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
   
  <script>
   
		
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
    		pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });

   
   </script>













