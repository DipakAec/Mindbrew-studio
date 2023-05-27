<?php require "headers/header-c.php" ?>
<?include "submit.php" ?>

<section class="hello">
  <div class="container">
    <div class="row">
    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.05s">
    <h2 data-text="Apply">Fill the Form to Apply</h2>
    </div>
    <br><br><br>

        <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>

    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.05s">
      	 <form class="row inner" id="apply" action="" method="post">
        <div class="form-group col-sm-12 col-12">
          <label><span>Full Name</span></label>
          <input type="text" name="name" id="name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>Phone Number</span></label>
          <input type="text" name="phone" id="phone" value="<?php echo !empty($postData['phone'])?$postData['phne']:''; ?>" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>E-mail Id</span></label>
          <input type="text" name="email" id="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>Applied For</span></label>
          <input type="text" name="subject" id="subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-12">
          <label><span>Portfolio/CV</span></label>
          <input type="file" name="attachment" id="attachment" value="" required>
        </div>
        <!-- end form-group -->
        <div class="form-group col-sm-12 col-12">
          <label><span>Message</span></label>
          <textarea name="message" id="message" cols="30" rows="10" value="" placeholder="Tell me about Yourself"><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
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