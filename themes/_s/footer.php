<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="footer-content">
        <div class="background-images">
            <div class="top images"></div>
            <div class="bottom images"></div>
        </div>
            <div class="flexingBro">
            <div class="form-center outline">
              <form class="">
              <h1 class="text-align-left">Request a <span>Consultation</span></h1>
              <p class="text-align-left">Our team of certified professionals will work to
                find the right solution for you.
              </p>
              <div class="container column">
                <form action="/action_page.php">
                  <div class="row">
                    <div class="col-25">
                      <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="country">Country</label>
                    </div>
                    <div class="col-75">
                      <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-25">
                      <label for="subject">Subject</label>
                    </div>
                    <div class="col-75">
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <input type="submit" value="Submit"> 
                  </div> 
              </form>
              <br />
              <br />
            <nav>
			
                <ul class="horizontal-list">
				
                    
					<li><?php the_custom_logo();?> </li>
                    <li>Services</li>
                    <li>Business Solutions</li>
                    <li>About KGB</li>
                    <li>Contact Us</li>
                    <li><img src="/wp-content/uploads/2023/08/linkedin.png" alt=""></li>
                    <li><img src="" alt=""></li>
                </ul>
               
            </nav> 
       <div class="flexingBro">
             <ul class="address">
                    <li><span style="color: #ccd62a;"><b>Address:</b></span></li>
                    <li class="no-wrap">4842 E Broadway Blvd</li>
                    <li>Tucson, AZ 85711</li>
                </ul>
            
               <div class="number">520.743.3300
               </div>
               <button class="ticket">Create A Ticket
               </button>
               <div class="bottom-right">
               <p class="no-wrap">&copy; 2023 <span>KGB Communications.</span></p>
               <p>All Rights Reserved.</p>
               </div>
               </div>
               </div>
               </div>
              </div>  
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
