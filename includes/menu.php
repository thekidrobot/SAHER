<?php
$class="class='current_page_item'"
?>

  <div id="menu">
    <ul id="main">
      <li <?php if ($curr_page == "index.php") echo $class; ?>><a href="index.php">Home</a></li>
      <li <?php if ($curr_page == "about.php") echo $class; ?>><a href="about.php">About Us</a></li>
      <!--<li <?php if ($curr_page == "our_work.php") echo $class; ?>><a href="our_work.php">Our Work</a></li>-->
      <li <?php if ($curr_page == "calendar.php") echo $class; ?>><a href="calendar.php">Events</a></li>
      <li <?php if ($curr_page == "programs.php") echo $class; ?>><a href="programs.php">Programs</a></li>
      <li <?php if ($curr_page == "our_stories.php") echo $class; ?>><a href="our_stories.php">Our Stories</a></li>
      <li <?php if ($curr_page == "partners.php") echo $class; ?>><a href="partners.php">Partners</a></li>
      <li <?php if ($curr_page == "get_involved.php") echo $class; ?>><a href="get_involved.php">Get Involved</a></li>
      <li <?php if ($curr_page == "awards.php") echo $class; ?>><a href="awards.php">Awards</a></li>
      <li <?php if ($curr_page == "contact.php") echo $class; ?>><a href="contact.php">Contact Us</a></li>
    </ul>
  </div>