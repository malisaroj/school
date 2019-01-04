@extends('layout.page')

@section('content')
     
<section>
  
  <div class="row fix">

  <div class="col-md-6">

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->

  <ol class="carousel-indicators">

    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

  </ol>


  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">

    <div class="item active">

      <img src="image/img1.jpeg" alt="caption">

      <div class="carousel-caption">
        
      </div>

    </div>

    <div class="item">

      <img src="image/img2.jpeg" alt="caption">

      <div class="carousel-caption">
        
      </div>

    </div>

    <div class="item">

      <img src="image/img3.jpeg" alt="caption">

      <div class="carousel-caption">
        
      </div>

    </div>
    
  </div>


  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">

    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>

  </a>

  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">

    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>

  </a>

</div>

</div>

<div class="col-md-6 current_news">

  <h1>Current news</h1>
  <div class="tan"></div>

  <ul>

    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">admission notice for student</a></li>
    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">admission notice for student</a></li>
    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="#">admission notice for student</a></li>
  
  </ul>

   <button type="button" class="btn btn-default">All News</button>

</div>

</div>
</section>

</header>

<section>

  <div class="row fix">

  <div class="col-md-4 notice_1">

    <h2>Notice</h2>
    <div class="tan1"></div>

    <i class="fa fa-file-o" aria-hidden="true"></i><p>March 27, 2016</p>

      <h6><a href="#">SEE Exam 16</a></h6>

    <i class="fa fa-file-o" aria-hidden="true"></i><p>January 31, 2016</p>

      <h6><a href="#">Anual sports competition 2016</a></h6>

    <i class="fa fa-file-o" aria-hidden="true"></i><p>December 28, 2015</p>

      <h6><a href="#">2018 Admission Fee : 3 & 6</a></h6>

    <i class="fa fa-file-o" aria-hidden="true"></i><p>December 28, 2015</p>

      <h6><a href="#">2018 Admission Fee : 3 & 6</a></h6>

    <button type="button" class="btn">All Notice</button><span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>

  </div>

  <div class="col-md-4 institution_1">

   <h2>Our Institution</h2>
   <div class="tan1"></div>

   <img src="image/6.png" alt="caption">

   <p>Welcome To Dibya Jyoti Secondary School.</p>

   <h6>The teacher's voice
    </h6>

  <button type="button" class="btn">Read More</button><span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>


  </div>

  <div class="col-md-4 events_1">


    <h2>Events</h2>

    <div class="tan2"></div>

    <ul>

      <li>

        <div class="box1">
          <p>AUG</p>
          <h3>11</h3>

        </div>

          <div class="events_text1">

            <p><a>New Year Celebration</a></p>
            <h6>New Year Celebration held at our school</h6>

          </div>
 


      </li>
  
    <li>
    <div class="box2">

      <p>AUG</p>
      <h3>11</h3>

    </div>

    <div class="events_text2">

      <p><a>New Year Celebration</a></p>
      <h6>New Year Celebration held at our school</h6>

    </div>


  </li>

    

 <li>
    <div class="box3">

      <p>AUG</p>
      <h3>23</h3>

    </div>

     <div class="events_text3">

      <p><a>New Year Celebration</a></p>
      <h6>New Year Celebration held at our school</h6>

    </div>

</li>

</ul>
   
    <button type="button" class="btn">More Events</button><span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>

  </div>

</div>

</section>

<section>

  <div class="row fix">

  <div class="col-md-6 principal">

    <img src="image/6.png" alt="caption">

    <p><a href="#">Education is the key to unlock the golden door to success</a></p>
    <h6><a href="#">- Principal</a></h6>

  </div>
  <div class="col-md-6 principal">

    <img src="image/6.png" alt="caption">

    <p><a href="#">Education is the movement from darkness to Shine</a></p>
    <h6><a href="#">- Chairman</a></h6>


  </div>

  </div>


</section>

<section>
  <div class="row fix">

  <div class="col-md-4 academic_info">

    <h2>Academic Info</h2>
    <div class="tan3"></div>

    <ul>
      <li><a href="#">Class Schedule</a></li>
      <li><a href="#">Our Teachers</a></li>
      <li><a href="#">Our Staffs</a></li>
      <li><a href="#">Academic Rules</a></li>
      <li><a href="#">Academic Calender</a></li>
      <li><a href="#">Attandance Information</a></li>
    </ul>

  </div>

  <div class="col-md-4 campus_life">

    <h2>Campus Life</h2>
    <div class="tan4"></div>

    <ul>
      <li><a href="#">Campus Tour</a></li>
      <li><a href="#">History</a></li>
      <li><a href="#">Our Vision</a></li>
      <li><a href="#">Achievments</a></li>
      <li><a href="#">Administrator</a></li>
      <li><a href="#">Governing Body</a></li>
    </ul>

  </div>
  <div class="col-md-4 feedback_corner">

    <h2>Feedback Corner</h2>
     <div class="tan5"></div>

     <form action="" method="">
      <input class="contract_form1" type="text" name="name" value="Contact with us"/>
      <input class="form_button" type="submit" value=">">
     </form>

     <p>For your any kind of query or complaint please contact with us.
      We will gladly receive it.</p>

  </div>

</div>

</section>

<section>

  <div class="row fix link">

    <div class="col-md-4 link_1">

      <h3>Important Links</h3>
      <div class="tan6"></div>

      <ul>

        <li><a href="http://www.moe.gov.np/">Ministry of Education</a></li>
        <li><a href="https://tsc.gov.np/">Teacher Service Commision</a></li>
        <li><a href="http://www.neb.gov.np/results">SEE Exam Result</a></li>
        <li><a href="http://www.doe.gov.np/">Department of Education</a></li>
      </ul>
      
    </div>

    <div class="col-md-4 link_2">

      <h3>Educational Links</h3>
      <div class="tan7"></div>

      <ul>

        <li><a href="http://tribhuvan-university.edu.np/">Tribhuwan University</a></li>
        <li><a href="http://ku.edu.np/">Kathmandu University</a></li>
        <li><a href="http://www.neb.gov.np/">National Examinations Board</a></li>
        <li><a href="http://purbuniv.edu.np/">Purwanchal University</a></li>
        <li><a href="http://pabson.org/">PABSON</a></li>



      </ul>
      
    </div>

    <div class="col-md-4 link_3">

      <h3>Various Services</h3>
      <div class="tan8"></div>

      <ul>

        <li><a href="#">E-Book</a></li>
        <li><a href="#">Teachers Portal</a></li>


      </ul>
     
    </div>

  </div>


</section>

<section>

  <div class="row fix links">

    <div class="col-md-4 links_1">

      <h3>Quick Links</h3>
      <div class="tan9"></div>

      <ul>

        <li><a href="#">Routine</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Online Application</a></li>
        <li><a href="#">Jobs Application</a></li>
        

      </ul>

      <h3>Your feedback</h3>
      <div class="tan9"></div>

      <div class="feedback">
        <p><a href="#">Supports us with you feedback!</a></p>

      </div>

    </div>

    <div class="col-md-4 links_2">

      <h3>Our Teachers</h3>
      <div class="tan10"></div>

      <ul>
        <li>

          <div class="image1">

            <img src="image/6.png" alt="caption">

          </div>

          <div class="text1">
            <h5><a href="#">Yubak Raj Mali</a></h5>
            <div class="tan11"></div>
            <p>Assistant Head Teacher (Day)</p>
            <h6><a href="#">Full Profile</a></h6>
          </div>




        </li>
        <li>

          <div class="image2">

            <img src="image/6.png" alt="caption">

          </div>

          <div class="text2">
           
           <h5><a href="#">Ghanshyam Thapa Magar</a></h5>

            <div class="tan12"></div>

            <p>Assistant  Teacher (Day)</p>

            <h6><a href="#">Full Profile</a></h6>
            
          </div>




        </li>


      </ul>

      <button type="button" class="btn">All Teachers</button><span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>

    </div>


    <div class="col-md-4 links_3">

      <h3>Gallery</h3>
      <div class="tan12"></div>

      <ul>

        <li><a href="#"><img src="image/gallery1.jpeg" alt="caption"></a></li>
        <li><a href="#"><img src="image/gallery2.jpeg" alt="caption"></a></li>
        <li><a href="#"><img src="image/gallery3.jpeg" alt="caption"></a></li>
        <li><a href="#"><img src="image/gallery4.jpeg" alt="caption"></a></li>
        <li><a href="#"><img src="image/gallery5.jpeg" alt="caption"></a></li>
        <li><a href="#"><img src="image/gallery6.jpeg" alt="caption"></a></li>

      </ul>

      <button type="button" class="btn">Our Exclusive Gallery</button><span class="glyphicon glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>

    </div>


   
  </div>


</section>



    
@stop
