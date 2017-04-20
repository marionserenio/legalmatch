<?php require('header.php') ?>
<div class="pusher">
  <div id="show-sidebar" class="ui black launch right attached fixed button">
    <i class="sidebar icon"></i>
  </div>    
  <div class="main-content">
    <div class="ui container">
      <div class="sixteen column wide">
        <h2>SETTINGS</h2>

        <form class="ui form">
          <h4 class="ui dividing header">Basic information</h4>
          <div class="basic-info">
            <div class="sixteen wide field inverted">
              <label>First name</label>
              <input type="text">
            </div>
            <div class="sixteen wide field">
              <label>Last name</label>
              <input type="text">
            </div>   
            <div class="sixteen wide field">
              <label>Company</label>
              <input type="text">
            </div>   
          </div>
          <h4 class="ui dividing header">SMS Settings</h4>
          <div class="sms-settings">
            <div class="sixteen wide field">
              <label>Phone number</label>
              <input type="text">
            </div> 
            <div class="sixteen wide inline field">
              <div class="ui toggle checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>Receive SMS notifications</label>
              </div>
            </div>   
          </div>

          <h4 class="ui dividing header">Password</h4>
          <div class="password-settings">
            <div class="sixteen wide field">
              <label>Old password</label>
              <input type="text">
            </div>   
            <div class="sixteen wide field">
              <label>New password</label>
              <input type="text">
            </div>   
            <div class="sixteen wide field">
              <label>Confirm password</label>
              <input type="text">
            </div>   
          </div>           
            <div class="field">
              <input type="submit" class="ui button" value="Save">
            </div>     

        </form>
      </div>
    </div>
  </div>    
</div>
<?php require('footer.php') ?>
