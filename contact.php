
<?php include("header.php"); ?> 
<?php include("php/meta.php"); meta("Photography"); ?>  
<?php include("nav.php"); ?><br/>
<div class="row">
  <div class="nine columns">
    <h3>Get in Touch!</h3>
    <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
    <dl class="contained tabs">
      <dd class="active"><a href="#contactForm">Contact Our Company</a></dd>
      <dd><a href="#contactPeople">Specific Person</a></dd>
    </dl>
    <ul class="tabs-content contained">
      <li id="contactFormTab" class="active">
        <div class="row collapse">
          <div class="two columns">
            <label class="inline">Your Name</label>
          </div>
          <div class="ten columns">
            <input type="text" id="yourName"/>
          </div>
        </div>
        <div class="row collapse">
          <div class="two columns">
            <label class="inline">Your Email</label>
          </div>
          <div class="ten columns">
            <input type="text" id="yourEmail"/>
          </div>
        </div>
        <label>What's up?</label>
        <textarea rows="4"></textarea>
        <button type="submit" class="radius button">Submit</button>
      </li>
      <li id="contactPeopleTab">
        <ul class="block-grid five-up">
          <li> <a href="mailto:mal@serenity.bc.reb"> </a><img src="http://placehold.it/200x200&amp;text=[person]"/><br/><span>Andrea Moretti</span></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="three columns">
    <h5>Map</h5>
    <p><a href="" data-reveal-id="mapModal"> <img src="http://placehold.it/400x280"/></a><br/><a href="" data-reveal-id="mapModal">View Map</a></p>
    <p>
      123 Awesome St. 
      <br>
      Barsoom, MA 95155
      
      
    </p>
  </div>
</div><?php include("footer.php"); ?>
<?php include("tail.php"); ?>