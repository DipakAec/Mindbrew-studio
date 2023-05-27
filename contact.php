<?php require "headers/header-con.php" ?>
<section class="hello">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <h2 data-text="Hola!">Come and say hello!</h2>
      </div>
      <!-- end col-12 -->
     
      <!-- end col-4 -->
	  </div>
     <!-- end row -->
     <div class="row align-items-center">
      <div class="col-lg-6 wow fadeIn">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.44477293421!2d88.36178942495215!3d22.487489794521853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02711e96f7d28b%3A0xeefd39a40af4a552!2sRegent%20Estate%2C%2081%2F3%2C%20Bijoygarh%2C%20Jadavpur%2C%20Kolkata%2C%20West%20Bengal%20700032!5e0!3m2!1sen!2sin!4v1675192035490!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      	<!-- end map -->
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.05s">
      	 <form class="row inner" id="contact" action="contectmail.php" method="post" enctype="multipart/form-data">
        <div class="form-group col-sm-6 col-12">
          <label><span>Your name</span></label>
          <input type="text" name="name" id="name" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Your Phone</span></label>
          <input type="text" name="phone" id="phone" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Your e-mail</span></label>
          <input type="text" name="email" id="email" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-6 col-12">
          <label><span>Subject</span></label>
          <input type="text" name="subject" id="subject" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12">
          <label><span>Your message</span></label>
          <textarea name="message" id="message" required></textarea>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12">
          <button id="submit" type="submit" name="submit">SUBMIT</button>
        </div>
        <!-- end form-group -->
      </form>
      <!-- end form --> 
       <div id="success" class="alert alert-success" role="alert"> Your message was sent successfully! We will be in touch as soon as we can. </div>
        <!-- end success -->
        <div id="error" class="alert alert-danger" role="alert"> Something went wrong, try refreshing and submitting the form again. </div>
        <!-- end error --> 
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end hello -->
<?php require "footer.php" ?>