



<?php include('config.php'); 

$validate=new Validation();     
if($_SESSION['success']!="")
{
$stat['success']=$_SESSION['success'];
unset($_SESSION['success']);
}
$aryDetail=$db->getRow("select * from  userdetail where id='".$iInstituteId."'"); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Index</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('inc.meta.php');?>


<style>

.slider-bh .carousel-inner {
    height: 480px;
}

.conntent p {
    font-size: 15px;
    line-height: 20px;
    color: #666;
    font-weight: 600;
}

</style>


</head>
<body>

<div class="page-container"> 
  <?php include('inc.header.php');?>
  <div class="slider-bh">
    <div class=" ">
      <div class=" ">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
           <?php	$i=0;
		$aryList=$db->getRows("select * from institute_gallery  where  userid = '".$iInstituteId."' and status = '1' order by id desc");
		foreach($aryList as $iList) { $i=$i+1; ?>
            <div class="item <?php if($i=='1') { echo 'active'; } ?>"> <img src="uploads/<?php echo $iList['image']; ?>" alt="First slide"> 
             <div class="main-text hidden-xs">
         		 <div class="col-md-12 text-center">
            		<h1><?php echo $iList['title']; ?></h1>
            		<h3><?php echo $iList['description']; ?></h3>
          		</div>
        	</div>
          </div>
          <?php } ?>
          </div>
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="fa fa-chevron-left"></span></a><a class="right carousel-control"                        href="#carousel-example-generic" data-slide="next"><span class="fa fa-chevron-right"> </span></a> </div>
       
      </div>
    </div>
  </div>
  
  <?php if($iGetInstituteDetailSetting['is_show_about_us']=='1') { ?>
  
  <div class="bh-pincka">
  
  <div class="container">
  <div class="row">
  <div class="col-md-8 col-sm-8">
  
  
  <div class="hfd22">
  
<h1 style="visibility: visible;    margin: 0;" class="zoomIn animated"  >ABOUT US</h1>
  
  <hr class="fg-hr">
  
  
  <div class="ctent15">
  <div class="img-hfh"><img src="uploads/<?php echo $iGetInstituteDetailSetting['about_image']; ?>"></div>
  
  <div class="conntent">
  <p><?php echo substr($iGetInstituteDetailSetting['about_content'],0,700); ?></p>
  
  </div>
  
  <div class="ncnnnnnnnn">
  <a class="read-bh-more" href="about.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>  &nbsp;&nbsp;	Read More</a>
  
  
  </div>
  
  </div>
  
  
 <div class="row bbjbbjhihiuhiuihh">
 
  
  <div class="col-md-12 col-sm-12">
  <h3>CURRENT AFFAIR'S</h3>
  <hr class="fg-hr">
 
 <div class="news-1-box">
 <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" id="scroll_news-3">
 
     <ul class="news-listdhs">
	 <?php
		$aryList=$db->getRows("select * from news where userid = '".$iInstituteId."'   order by id desc");
	foreach($aryList as $iList)
			{						
			 ?>
	 <li><a href="page1.php?id=<?php echo $iList['id']; ?>"><?php echo $iList['title']; ?></a></li>
	  
			<?php } ?>
	 </ul>
       


 </marquee>
 
 
 </div>
 
  </div>
 </div> 
  
  
  
  
  
  
  
  </div>
  
  

  
  
  </div>
  <div class="col-md-4 col-sm-4 top-div">
  
  <div class="bh-right-side">
  <div class="f1-red f1u">
  
  <div class="ghs-bh">
  <h2 class="blink"><blink>Current affair's</blink></h2>
  <a href="current_affair.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Click here</a>
  </div>
  
    <div class="llp-bh">
  <i class="fa fa-money" aria-hidden="true"></i>
  
    
  </div>
  
  
  
  </div>
   <div class="f1-58 f1u">
   <form  method="post" name="register" action=""   id="mobilenosub">
  <div class="ghs-bh">
  <h2 class="blink"><blink>Get Mobile alert</blink></h2>
  <input class="form-control sdhfu" type="text" id="mobileno" style="color:black">
   <button class="jip" onClick="getregister();" type="button" ><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;Submit</button>
   <div id="iMobileError"></div>
  </div>
  
   <div class="llp-bh">
<i class="fa fa-desktop" aria-hidden="true"></i>
  
    
  </div>
  
  </form>
  </div>
   <div class="f1-55 f1u">
  
  <div class="ghs-bh">
  <h2 class="blink"><blink>Contact us</blink></h2>
   <a href="contact.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;Click here</a>
  </div>
  
    <div class="llp-bh">
<i class="fa fa-id-badge" aria-hidden="true"></i>
  
    
  </div>
  
  
  
  </div>
  
   <div class="f1-60 f1u">
  
  <div class="ghs-bh">
  <h2 class="blink"><blink>Result</blink></h2>
  
  <form name="frm2">
 
 
 <script>
 function openthislink()
 	{
		
	var resultlink =	document.getElementById("resultlink").value;
window.location.href = resultlink;
	 
	}
	 function openthislinknew()
 	{
		
	var resultlink =	document.getElementById("resultlinknew").value;

	window.location.href = resultlink;
	}
	
</script>

  
  
  <select class="form-control"  id="resultlink" onchange="openthislink(); " >
   <option>Check result</option>
    <?php
		$iResultLInks=$db->getRows("select * from result_link where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
	foreach($iResultLInks as $iResLnk)
			{	 if($iResLnk['select_site']=='1') {					
			 ?>
    		<option value="uploads/<?php echo $iResLnk['pdf']; ?>"><?php echo $iResLnk['title']; ?></option>
 			<?php  } else { ?>
            <option value="<?php echo $iResLnk['website_link']; ?>"><?php echo $iResLnk['title']; ?></option>
            
            <?php  } }  ?>
  </select>
   </form>
  </div>
  
    <div class="llp-bh">
<i class="fa fa-bar-chart" aria-hidden="true"></i>
  
    
  </div>
  
  
  
  </div>
  
   <div class="f1-61 f1u">
  
  <div class="ghs-bh">
  <h2 class="blink"><blink>Latest Vacancy</blink></h2>
    <form name="frm22">
 <select class="form-control" id="resultlinknew" onchange="openthislinknew()">
 <option>Select latest vacancy</option>
  <?php
		$iLatestVaccancy=$db->getRows("select * from latest_vacancy where userid = '".$iInstituteId."' and usertype = '2'  and status  = '1'  order by id desc");
	foreach($iLatestVaccancy as $iLatVac)
			{						
			 if($iLatVac['select_site']=='1') {					
			 ?>
    		<option value="uploads/<?php echo $iLatVac['pdf']; ?>"><?php echo $iLatVac['title']; ?></option>
 			<?php  } else { ?>
            <option value="<?php echo $iLatVac['website_link']; ?>"><?php echo $iLatVac['title']; ?></option>
            
            <?php  } } ?>
  </select>
   </form>
  </div>
  
    <div class="llp-bh">
 <i class="fa fa-search" aria-hidden="true"></i>
  
    
  </div>
  
  
  
  </div>
  
  
  
  
  
  
  </div>
  </div>
  
    <?php } ?>
  </div>
  
  
  </div >
  
  
  </div>
  
  
  <div class="mock-testi bottom-div" style="display: none;" />           
    <div class="container">
      <div class="col-md-12 kjbvncvj">
        <h1 class="zoomIn animated" style="visibility: visible;">Our Courses</h1>
        <p>We are a group of skilled individuals.</p>
        <div class="kd-divider">
          <div class="short-seprator"><span><i class="fa fa-building ikon"></i></span></div>
        </div>
      </div>
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
 	 $iList=$db->getRow("select * from com_category where id = '".$iagaList['sub_category']."' order by id desc");
	 
	  ?>
      
        <div class="col-md-3 col-sm-3">
          <div class="pricing    zoomIn animated" style="visibility: visible;">
            <div class="thumbnail animated pulse infinite">
              <div class="fa img-t"><img src="http://indiatry.com/coachingclass/insasset/images/interview1.png" class="img-responsive"></div>
            </div>
            <div class="title"><a href="detail.php?id=<?php echo $iList['id']; ?>"> <?php echo $iList['categoryname']; ?></a> </div>
            <div class="content1">
              <ul>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>&t=1" class="text-anc11">Mock Test</a> </li>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>" class="text-anc11">Topic Wise</a> </li>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>&t=3" class="text-anc11">PDF Tutorials</a> </li>
                <li> <a href="detail.php?id=<?php echo $iList['id']; ?>&t=4" class="text-anc11">Video Tutorialst</a> </li>
              </ul>
            </div>
          </div>
        </div>
        
        <?php } ?>  
         
      </div>
    </div>
  </div>
  <?php if($iGetInstituteDetailSetting['is_vedio_tutorial']=='1') { ?>
  <div class="viseo-bh-section">
    <div class="container">
      <div class="col-md-12 kjbvncvj">
        <h1 class="zoomIn animated" style="visibility: visible;">Video Tutorials</h1>
        <div class="kd-divider">
          <div class="short-seprator"><span><i class="fa fa-building ikon"></i></span></div>
        </div>
      </div>
      <div class="row">
        <?php  $i=0;	
			 $aryList=$db->getRows("select * from  vedio_competitive where userid='".$iInstituteId."' and status = '1' and is_home = '1' order by id desc limit 0,8"); 
			  foreach($aryList as $iList) {	$i=$i+1;
			 
			  ?> 
         <div class="col-md-3 col-sm-3 zoomIn animated" style="visibility: visible;">
          	<div class="video-img">
           <a href="vedio.php?id=<?php echo $iList['category']; ?>&type=1&tut=<?php echo $iList['id']; ?>"> 
		   <img src="uploads/<?php echo $iList['profile_image']; ?>">
		   
		   <span class="bh-vido"> <?php echo $iList['title']; ?></span>
		   </a> 
            
            </div>
        </div>
         <?php } ?>  
      </div>
     <!-- <div class="col-md-12 kjbvncvj"> <a href="#" class="comonn-btn">View More</a> </div>-->
    </div>
  </div>
  <?php } ?>
  
  <?php if($iGetInstituteDetailSetting['home_title1']!='') { ?>
  <section class="jfgvbdj"  >
    <div class="container">
      <div class="row">
        <div class="col-md-6"> <img src="uploads/<?php echo $iGetInstituteDetailSetting['home_image1']; ?>"> </div>
        <div class="col-md-6">
          <h1 class="hh1"><?php echo $iGetInstituteDetailSetting['home_title1']; ?></h1>
          <p><span><?php echo $iGetInstituteDetailSetting['home_desc1']; ?></span></p>
        </div>
      </div>
    </div>
  </section>
   <?php } ?>
  
  <?php if($iGetInstituteDetailSetting['is_testimonial']=='1') { ?>
  
  <section class="bh-larn">
    <div class="container">
   
     <div class="col-md-12 kjbvncvj">
        <h1 class="zoomIn animated" style="visibility: visible;">Testimonial</h1>
        <div class="kd-divider">
          <div class="short-seprator"><span><i class="fa fa-building ikon"></i></span></div>
        </div>
      </div>
	  
   <div class="carousel-reviews broun-block">
   
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                     
				  <div class="item active">     
				   <?php  $i=0;	
$iTestimonial=$db->getRows("select * from   institute_testimonial where userid='".$iInstituteId."' and status = '1' order by id desc"); 


			  foreach($iTestimonial as $iTestList) {	$i=$i+1;
 			  ?>
                 

				  <div class="col-md-3 col-sm-6">
        				    <div class="block-text rel zmin">
						        
							 	 
						        <p><?php echo $iTestList['comment']; ?></p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel">
								<img alt="" src="uploads/<?php echo $iTestList['image']; ?>"  style="width:50px;">
								<a style="text-decoration:none; cursor:none"><?php echo $iTestList['username']; ?></a>
								<i><?php echo $iTestList['designation']; ?></i>
							</div>
						</div>
						
						
			  <?php if(count($iTestimonial)>$i) if($i%4=='0') { echo '</div><div class="item">'; } } ?>  
            			 
						 
						 
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
 
  </section>
   <?php } ?>
   
   
  <section class="latessstnewsswwj">                                 
  
		<div class="container">
				<h1> LATEST RESULTS </h1> 
			 <div class="row">
        
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			
                <div class="item active">
                    <div class="row">
					
                        <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="info">                
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus. </p>  
                                    </div>
									
									<div class="btn-resulttsss">   
										<a href="" class="btnsuccess">View Result</a>
									</div>
									
									
									
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
						
						 <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss2.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
						
						  <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss3.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
             	
					</div>
                </div>
				
			
				
				
            
			
			</div>
        </div>
    </div>
		</div>

  </section>
  
  <section class="latessstnewsswwj" style="background-color: #ffffff;">                                  
  
		<div class="container">
				<h1> LATEST VACANCY </h1> 
			 <div class="row">
        
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
			
                <div class="item active">
                    <div class="row">
					
                        <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss1.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
						
						 <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss2.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
						
						  <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss3.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
             	
					</div>
                </div>
				
				<div class="item">
                    <div class="row">
					
                        <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss4.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
						
						 <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss5.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
						
						  <div class="col-sm-4">
							       
                            <div class="col-item">
								 
                                <div class="photo">         
                                   <img src="images/newss1.jpg" class="img-responsive" alt="a" />
                                </div>
								
                                <div class="info"> 
                                    <div class="row">    
                                        <h3>Lorem Ipsum</h3>
										<h4>11/07/2017</h4> 
										<p> Lorem ipsum dolor sit amet, metus feugiat ultrices purus, ante voluptatibus fusce magnis eget, nam massa. <p>
                                    </div>                                
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
							
                        </div>
             	
					</div>
                </div>
				
				
				
				
            
			
			</div>
        </div>
    </div>
		</div>

  </section>
  
  
<div class="ourfac_all">
	
<div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase">Our Faculty </h3>
                            <p class="p-top-30 half-txt">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. </p>
                        </div>

					                                	
						
                        <div class="col-md-4 col-sm-4">
						
						<div class="thumbnail">   
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
					
				</div>

					
                        <div class="col-md-4 col-sm-4">
						
						<div class="thumbnail">
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
                    </div>
					
						<div class="col-md-4 col-sm-4">
						
							<div class="thumbnail">
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

</div>

<div class="mobileapps">

	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-1"></div> 
			<div class="col-md-7 col-sm-7">
				<h1> MOBILE APP DESIGN
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
				<img src="images/mobilessapaas.png" class="imgg1" >      
			</div>
		</div>
	</div>
	
</div>



 
                                                                 

   
   
   
  <?php include('inc.footer.php');?>
  <?php include('inc.js.php');?>
<script>
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