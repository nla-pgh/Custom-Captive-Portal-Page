<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=7.0000"/>
  <link href="/images/favicon-captive-portal.png" type="image/png" rel="icon"></link>
  <script type="text/javascript">
     var redirectUrl = "<?= get_redirect_url() ?>";
     var displayLogoutButton = <?= ( $cpd_settings["logout_button"] == "t" ) ? "true" : "false" ?>;
  </script>
  <?php // Reference parent Javascript using the current working directory ?>
  <script src="json2-min.js" type="text/javascript"></script>
  <?php // Reference custom Javascript using the custom directory. ?>         
  <script src="custom/my_portal.js" type="text/javascript"></script>
  <title>
    <?php // To use values from the branding settings, use this format ?>
    <?= trim( $branding_settings["company_name"] ) ?> | Custom Captive Portal
  </title>
  <link type="text/css" rel="stylesheet" href="/skins/<?= trim( $skin_settings["user_skin"] ) ?>/css/user.css"></link>
  
  </head>
  <body class="captive-portal" id="simple">
    <div id="content">
      <div id="header">
         <?php // To use the branding logo, use this format ?>
        <a href="<?= trim( $branding_settings["company_url"] ) ?>"><img alt="" src="/images/BrandingLogo.gif"/></a>
        <div class="title">
          Custom Page
        </div>
      </div>
      <div id="main">
        <p class="icon-captive-portal">
          <br/>
        </p>
          <p id="logout-success" class="success" <?php if($logout_success===true){echo 'style="display:block"';}?>>You have successfully logged out.</p>        
        <p class="description">
          <span>
            <b>
              Welcome to a custom page.
            </b>
          </span>
        </p>        
          <p id="login-error" class="error">Unable to authenticate you, please try again.</p>
        <div class="info-list-captive-portal">
          <div class="u-form-item">
            <label class="u-form-item-label cpd-label">Username:</label>
          </div>
          <div class="u-form-item text-field">
            <input class="u-form-text u-form-field" type="text" id="username"/>
          </div>
          <div class="u-form-item">
            <label class="u-form-item-label cpd-label">Password:</label>
          </div>
          <div class="u-form-item text-field">
            <input class="u-form-text u-form-field" type="password" id="password"/>          
          </div>          
          <div class="u-form-item">
              <a href="#" onclick="return authenticateUserWrapper('login-error')" class="img-background" id="authenticateUser">
              Login
            </a>
            <span id="please-wait" style="display:none">
                Please Wait ...            
            </span>             
          </div>
          <div class="message-text">
              <p>
              Here is a custom message.
              </p> 
          </div>
        </div>
        <p class="contact">
          <span>
            <?php // To use values from other templates, use this format ?>
            <?= trim( $cpd_settings["page_parameters"]["basicLoginFooter"] ) ?>
          </span>
        </p>
      </div>
      <div id="footer">
        <p>
          <span>
              Custom Captive Portal
          </span>
        </p>
      </div>
      <div id="extra-div-1">
        <span/>
      </div>
      <div id="extra-div-2">
        <span/>
      </div>
      <div id="extra-div-3">
        <span/>
      </div>
      <div id="extra-div-4">
        <span/>
      </div>
      <div id="extra-div-5">
        <span/>
      </div>
      <div id="extra-div-6">
        <span/>
      </div>
    </div>
  </body>
</html>
