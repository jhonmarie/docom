<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="{{ asset('public/assets/js/jquery1.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/bootstrap1.min.js') }}"></script>
  <script src="{{ asset('public/assets/script.js') }}"></script>
  <script src="{{ asset('public/assets/js/js/bootstrap.min.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}"></link>
<link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/css/css/style.css') }}"></link>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/css/bootstrap.min.css') }}"></link>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/css/bootstrap.min.css') }}"></link>
   <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap1.min.css') }}"></link>
<style>
  body {
            background: url('public/img/backdrop.png'), 
            -webkit-gradient(radial, center center, 0, center center, 460, from(#ccc), to(#ddd));
        }


#search {
    
    padding: 5px 9px;
    height: 35px;
    width: 330px;
    border: 1px solid #a4c3ca;
    font: normal 13px 'trebuchet MS', arial, helvetica;
    background: #f1f1f1;
    border-radius: 10px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);            
}

/* ----------------------- */

#submit
{       
    background-color: #f7edc9;
    background-image: linear-gradient(#95d788, #6cbb6b);
    border-radius: 3px 50px 50px 3px;    
    border-width: 1px;
    border-style: solid;
    border-color: #7eba7c #578e57 #447d43;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 
                0 1px 0 rgba(255, 255, 255, 0.3) inset;
    height: 35px;
    margin: 0 0 0 10px;
    padding: 0;
    width: 100px;
    cursor: pointer;
    font: bold 14px Arial, Helvetica;
    color: #23441e;    
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}

#submit:hover {       
    background-color: #95d788;
    background-image: linear-gradient(#6cbb6b, #95d788);
}   

#submit:active {       
    background: #95d788;
    outline: none;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;        
}

#submit::-moz-focus-inner {
       border: 0;  /* Small centering fix for Firefox */
}
    #search::-webkit-input-placeholder {
   color: #9c9c9c;
   font-style: italic;
}

#search:-moz-placeholder {
   color: #9c9c9c;
   font-style: italic;
}  

#search:-ms-placeholder {
   color: #9c9c9c;
   font-style: italic;
}   
#banner {
  position: absolute;
  top: 0px;
  left: 0px;
  right: 0px;
 
}
#add {
right:10px;
float:center;
}
#footer {
    padding:5px 20px;
    background-color:#2d3d5a;
    text-align:right;
    color:#fff;
    font-size:15px;
    text-align: center;
}
    </style>
</head>
<body>
 
<img src="{{ asset('public/img/banner1.png')}}" height="130px" width="1865px">
<div style="background-color:#2F4054;padding:10px;">
<div class="btn-group ewButtonGroup" >
    <div id="banner">
<form  action="{{asset('/search')}}" method="post" role="search">
<input id="search" type="text" name="q" placeholder="Type here">
     <input type="image"  src="{{ asset('public/img/search.png')}}"   width="100" height="60" alt="submit" />
   </form>
</div> 
</div>

<center>
      <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-group" id="myBtn">Add Record</button>
</center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

     @include('register')
</div>
</div>
</div>
  
@yield('content')


<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
    </script>
<!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>

<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
    <div class="footer-inner" >
        <div class="footer-content" style="background-color: #2F4054;color: white;padding: 10px;">
            <div class="container">
                <p>Copyright &copy; 2017 DOH-RO7 All rights reserved</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
