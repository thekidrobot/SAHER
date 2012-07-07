    <div id="sidebar2" class="sidebar">
      <div>
        <form action="get_involved.php" method="post" id="searchform">
        <h1>Contact Us</h1>
        <p>
          <label><strong>Title: </strong></label>
          <select name="title">
            <option value="Mr">Mr</option>
            <option value="Miss">Miss</option>
            <option value="Ms">Ms</option>
            <option value="Mrs">Mrs</option>
          </select>
        </p>
        
        <p>
          <label><strong>First Name: <span style="color:red">*</span></strong></label>
          <input name="fname" type="text" value="<?=$fname ?>" />
        </p>
            
        <p>
          <label><strong>E-Mail Address: <span style="color:red">*</span></strong></label>
          <input name="email" type="text" value="<?=$email ?>" />
        </p>

        <p>
          <label><strong>Contact Number: <span style="color:red">*</span></strong>
          </label><input name="ophone" type="text" value="<?=$ophone ?>" />
          <br class="clearAll" /><br />
        </p>

        <p>
          <label><strong>Your Query: <span style="color:red">*</span></strong></label>
           <textarea rows="5" wrap="physical" name="query_comments"><?=$query_comments ?></textarea>
        </p>
      
        <p><label><strong>CAPTCHA:&nbsp;&nbsp;(3 Black symbols)</strong></label>
          <img src="captcha.php" alt="captcha image">
          <input type="text" name="captcha" maxlength="3">
        </p>
        
        <p><input type="submit" value="Submit" name="Submit" class="button" /></p>
          
        </form>
      </div>
    </div>