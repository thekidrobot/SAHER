    <!-- start content -->
    <div id="content">
      <div class="post">
        <div class="entry">
          <h1><img src="images/title_contact.png" /></h1>
          <p>
            SAHER - Society for Awarenes, Harmony and Equal Rights <br />
            G/4/64 Prem Nagar, Jogeshwari (East)<br/>
            Mumbai, Maharastra, India, 400060<br/>
            Tel. 022 282 244 386<br/>
            Mail: saher.org@gmail.com
          </p>
          <img src="images/legal.png" />
        </div>
      </div>
    </div>
    <!-- end content -->

    <?php
    //Form sending and validation
    $postArray = &$_POST ;
    $title = escape_value($postArray['title']);
    $fname = escape_value($postArray['fname']);
    $lname = escape_value($postArray['lname']);
    $email = escape_value($postArray['email']);
    $ophone = escape_value($postArray['ophone']);
    $query_comments = escape_value($postArray['query_comments']);
  
    if(isset($_POST['Submit']))
    {
      //Setup Validations
      $validator = new FormValidator();
      $validator->addValidation("fname","req","Please fill in Name");
      $validator->addValidation("ophone","num","Only numbers are allowed in telephone field");
      $validator->addValidation("email","email","The input for Email should be a valid email value");
      $validator->addValidation("email","req","Please fill in Email");
      $validator->addValidation("captcha","req","Please fill the three black letters in the captcha field");
      $validator->addValidation("query_comments","req","Please Tell us your thoughts");
      
      if($validator->ValidateForm())
      { 
        if(isset($_POST["captcha"]))
        if($_SESSION["captcha"]==$_POST["captcha"])
        {
          //For the query mail
          $subject = "SAHER Inquiries - $fname";
  
          $msg="<p>$query_comments</p>
                <br />
                --
                Regards,<br />
                $title $fname 
                <br />Phone: $ophone
                <br />Mail: $email";
    
          $mailcheck = spamcheck($email_admin);
    
          if ($mailcheck==FALSE)
          {
            echo "Invalid email format";
          }
          else
          {
            sendemail($email_admin,$subject,$msg);
          }
          echo "<p><h2>Thank you for tell us your thoughts.</h2>";

          echo "Our staff will review your details and come back to you soon.<br />
              A mail will be sent to you to $email</p>
              <br />
              <a href = 'index.php'>Go to the home page</a>
              <br /></p>";
        }
        else
        {
          echo "<p><h2>Please Complete the following:</h2>";
          echo "Captcha not valid<br/>\n";
          echo "</p>";
        }
      }
      else
      {
          echo "<p><h2>Please Complete the following:</h2>";
  
          $error_hash = $validator->GetErrors();
          foreach($error_hash as $inpname => $inp_err)
          {
              echo "$inp_err<br/>\n";
          }
          echo "</p>";
      }
    }
    ?>
    