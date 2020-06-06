
<html lang="en">
<head>
  <title>Firebase Phone Number Auth</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 



  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('admin/login.css')}}">
   <link rel="stylesheet" href="{{asset('register-login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
  
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('register-login/css/style.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  
</head>
<body>
  
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center" >
          <div class="brand_logo_container" style="top:10px">
            <img src="{{asset('register-login/images/signin-image.jpg')}}" class="brand_logo" alt="Logo" id="logo"> 
          </div>
        </div>

        <div class="d-flex justify-content-center form_container">
          <form >
          {{--   @csrf --}}
             
            <div class="input-group mb-3 mt-5" id="phone">
              <div class="input-group-append" >
              {{--   <select class="input-group-text first_Phone" >
                  <option value="+84">+84</option>
                  <option value="+86">+86</option>
                  <option value="+1">+1</option>
                </select> --}}
                <span class="input-group-text"></span>
              
              </div>
              <input type="Number" id="phoneNumber" class="form-control input_user" value="" placeholder="phone register">
                          
              <div id="recaptcha-container"></div>
            </div>
            <span class="error" style="color: white"></span>
            
            
            <div class="d-flex justify-content-center mt-3 login_container" id="verify">
            <button type="button" name="button" class="btn login_btn" id="sign-in-button" onclick="onSignInSubmit();">VERIFY</button>

           </div>
          </form>

        </div>
    <a href="{{route('register')}}" class="text-center text-white" >Register a new membership</a>
        
      </div>

    </div>
  </div>
<script src="{{asset('register-login/js/login.js')}}" ></script>

</body>
</html>



