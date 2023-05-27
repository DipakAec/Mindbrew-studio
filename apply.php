<?php require "headers/header-c.php" ?>

<section class="hello">
  <div class="container">
    <div class="row">
    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.05s">
    <h2 data-text="Apply">Fill the Form to Apply</h2>
    </div>
    <br><br><br>
    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.05s">
      	 <form class="row inner" id="apply" action="mail.php" method="post" enctype="multipart/form-data">
        <div class="form-group col-sm-12 col-12">
          <label><span>Full Name</span></label>
          <input type="text" name="name" id="name" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>Phone Number</span></label>
          <input type="text" name="phone" id="phone"  required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>E-mail Id</span></label>
          <input type="text" name="email" id="email"  required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>Applied For</span></label>
          <input type="text" name="subject" id="subject"  required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12">
          <label><span>Portfolio/CV</span></label>
          <input type="file" name="file"  required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>Message</span></label>
          <textarea name="message" id="message" cols="30" rows="10" placeholder="Tell us about Yourself"></textarea>
        </div>
        <!-- end form-group -->
        <br><br>
        <div class="form-group col-12">
          <input  id="submit" type="submit" name="Submit">
        </div>
        <!-- end form-group -->
      </form>
      <!-- end form --> 
      </div>
      <!-- end col-6 -->
    </div>
  </div>
</section>

<?php require "footer.php" ?>