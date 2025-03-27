<?php include 'header.php'; ?> 


      <div class="space-top space-bottom">
         <div class="container">
            <div class="row gy-40">
               <div class="col-xl-5">
                  <div class="contact-info-wrap">
                     <h3 class="mb-30" style="color:#fff">Get In Touch</h3>
                     <div class="contact-info">
                        <div class="contact-info_icon"><i class="far fa-phone-volume"></i></div>
                        <div class="media-body">
                           <h4 class="contact-info_title h6">Phone1</h4>
                           <span class="contact-info_text"><a href="tel:7305891603">+91 7305891603</a></span>
                        </div>
                     </div>
                     <div class="contact-info">
                        <div class="contact-info_icon"><i class="far fa-envelope"></i></div>
                        <div class="media-body">
                           <h4 class="contact-info_title h6">Write Email</h4>
                           <span class="contact-info_text"> <a href="mailto:info@theassets.co.in">info@theassets.co.in</a></span>
                        </div>
                     </div>
                     <div class="contact-info">
                        <a href="https://maps.app.goo.gl/NQeZaLcTcyo6hK126"  target="_blank"><div class="contact-info_icon"><i class="far fa-location-dot"></i></div></a>
                        <div class="media-body">
                           <h4 class="contact-info_title h6">Location</h4>
                           <span class="contact-info_text">Office No 331, 3rd floor, Plaza Centre,<br>129 GN Chetty Road,
                            Thousand Lights, <br>Chennai - 600006.</span>
                        </div>
                     </div>
                     <h6 class="social-info_title" style="color:#fff">Follow Us</h6>
                     <div class="th-social style-white">
                         <a href="#"><i class="fab fa-facebook-f"></i></a> 
                         <a href="#"><i class="fab fa-twitter"></i></a> 
                         <a href="#"><i class="fab fa-linkedin-in"></i></a> 
                         <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-7">
                  <form action="mail.php" method="POST" class="contact-form3 ajax-contact h-100">
                     <h2 class="form-title h3 mb-30" style="color: #2a52be;">Quick Enquiry</h2>
                     <div class="row">
                        <div class="form-group col-md-6"><input type="text" class="form-control style-white" name="name" id="name" placeholder="Full name"></div>
                        <div class="form-group col-md-6"><input type="email" class="form-control style-white" name="email" id="email" placeholder="Email Address"></div>
                        <div class="form-group col-md-6"><input type="tel" class="form-control style-white" name="number" id="number" placeholder="Phone Number"></div>
                        <div class="form-group col-md-6">
                           <select name="subject" id="subject" class="form-select style-white">
                              <option value="" disabled="disabled" selected="selected" hidden>Subject</option>
                              <option value=""> Investment</option>
                              <option value="">Insurance</option>
                           </select>
                        </div>
                        <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Your Message"></textarea></div>
                        <div class="form-btn col-12"><button class="th-btn">Submit Now <i class="fa fa-arrow-right"></i></button></div>
                     </div>
                     <p class="form-messages mb-0 mt-3"></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="space-bottom">
         <div class="container map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15546.451163140322!2d80.24229023638722!3d13.060301146209866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666ab9f01f69%3A0x4a84719721211f35!2sThousand%20Lights%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1705924752327!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div> -->
      <div class="custom-map space-bottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15546.451163140306!2d80.2422902424829!3d13.06030114621012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52666ab9f01f69%3A0x4a84719721211f35!2sThousand%20Lights%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1742988138420!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

        <?php include 'footer.php'; ?> 