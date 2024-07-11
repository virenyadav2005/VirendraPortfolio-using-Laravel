<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virendra_Certification_portfolio</title>
    <link rel="stylesheet" type="text/css" href="certificationcss.css">
    <link rel="shortcut icon" href="logo-black.png" type="image/x-icon">
    

    <style>

      
.logo-head{
    display: flex;
}
        
        .head1 {
            font-size: 40px;
            color: rgb(16, 180, 125);
            margin:15px;
            margin-top: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;


        }

        .menu{
            border: 5px solid white ;
            color: white;
            height: 60px;
            
            /* padding-top: 18px;
            padding-left: 20px; */
        
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
                border-radius: 20px;
                transition: all .3s;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    
    
            
           }

    
        ul li{
           
            float: left;
            padding-right:3%;
            margin-top: 0;
            font-size: 20px;
            list-style: none;
            
            
        }
        li a{
            width: 5%;
            height: auto;
            color: white;
            text-decoration: none;
            
        }
        li a:hover{
            color:greenyellow;
            
        }

        


        .footer {
            width: 100%;
            height: 50px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;
            color: white;
            position: absolute;
            padding-top:20px;
          
            text-align:center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight:bold;
        }




        .body1{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: white;
}

.slider{
  width: 800px;
  height: 500px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 0.5s;
}

.slide img{
  width: 800px;
  height: 500px;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 0.5s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

#radio5:checked ~ .first{
  margin-left: -80%;
}

#radio6:checked ~ .first{
  margin-left: -100%;
}

#radio7:checked ~ .first{
  margin-left: -120%;
}

#radio8:checked ~ .first{
  margin-left: -140%;
}

#radio9:checked ~ .first{
  margin-left: -160%;
}

#radio10:checked ~ .first{
  margin-left: -180%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}

#radio5:checked ~ .navigation-auto .auto-btn5{
  background: #40D3DC;
}

#radio6:checked ~ .navigation-auto .auto-btn6{
  background: #40D3DC;
}

#radio7:checked ~ .navigation-auto .auto-btn7{
  background: #40D3DC;
}

#radio8:checked ~ .navigation-auto .auto-btn8{
  background: #40D3DC;
}

#radio9:checked ~ .navigation-auto .auto-btn9{
  background: #40D3DC;
}

#radio10:checked ~ .navigation-auto .auto-btn9{
  background: #40D3DC;
}



    </style>


</head>
<body>
  <div class="logo-head">
    <div class="logo">
        <img src="logo-black.png" alt="logo" height="100px" width="150px">
    </div>
<header>
    <p class="head1"> <strong> <i>Welcome To Virendra's Portfolio</i></strong></h1>
    </header>
</div>
   
<nav class="menu">
  <ul>
      <li><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('/Education')}}">Education</a></li>
  <li><a href="{{url('/Skills')}}">Skills</a></li>
  <li><a href="{{url('Certificates')}}">Certification </a></li>
  <li><a href="{{url('/Internships')}}">Internship's</a></li>
  <li><a href="{{url('/Projects')}}">Projects</a></li>
  <li><a href="{{url('/Contact-me')}}">Contact</a></li>
  </ul>
</nav>
   <center><h1><strong>All Certificates Are Available Here </strong></h1></center>
<div class="body1">

     <!--image slider start-->
     <div class="slider">
        <div class="slides">

          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <input type="radio" name="radio-btn" id="radio5">
          <input type="radio" name="radio-btn" id="radio6">
          <input type="radio" name="radio-btn" id="radio7">
          <input type="radio" name="radio-btn" id="radio8">
          <input type="radio" name="radio-btn" id="radio9">
          <input type="radio" name="radio-btn" id="radio10">
          <!--radio buttons end-->

          <!--slide images start-->
          <div class="slide first">
            <img src="1.jpg" alt="">
          </div>
          <div class="slide">
            <img src="2.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="3.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="4.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="5.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="6.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="7.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="VIRENDRA-YADAV-Participant-Certificate (1)_page-0001.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="VIRENDRA-YADAV-Participant-Certificate_page-0001.jpg" alt="" >
          </div>
          <div class="slide">
            <img src="clmsCertificate_page-0001.jpg" alt="" >
          </div>
          <!--slide images end-->

          <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
            <div class="auto-btn6"></div>
            <div class="auto-btn7"></div>
            <div class="auto-btn8"></div>
            <div class="auto-btn9"></div>
            <div class="auto-btn10"></div>
          </div>
          <!--automatic navigation end-->
        </div>


        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
          <label for="radio5" class="manual-btn"></label>
          <label for="radio6" class="manual-btn"></label>
          <label for="radio7" class="manual-btn"></label>
          <label for="radio8" class="manual-btn"></label>
          <label for="radio9" class="manual-btn"></label>
          <label for="radio10" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
      </div>
</div>

      <!--image slider end-->
  
      <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 10){
          counter = 1;
        }
      }, 5000);
      </script>
    
      <div class="footer">
    @copyright Virendra_Portfolio
    </div>
    
            
    
</body>
</html>