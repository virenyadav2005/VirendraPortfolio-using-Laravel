<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virendra_Skills_portfolio</title>
    <link rel="stylesheet" type="text/css" href="skillcss.css">
    <link rel="shortcut icon" href="logo-black.png" type="image/x-icon">
    

    <style>

.logo-head{
    display: flex;
}
        
        .head1 {
            font-size: 40px;
            color: rgb(16, 180, 125);
            margin: 15px;
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
    
        .menu ul li{
           
            float: left;
            padding-right:3%;
            margin-top: 0;
            font-size: 20px;
            list-style: none;
            
            
        }
       .menu li a{
            width: 5%;
            height: auto;
            color: white;
            text-decoration: none;
            
        }
        li a:hover{
            color:greenyellow;
            
        }


        /* -----------------------------------------------------for skill card------------------------------------------------------- */
        .myCard {
            background-color: transparent;
            margin: 3%;
            margin-left: 35%;
            width: 30%;
            height: 300px;
            perspective: 1000px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            
          }
          
          .title {
            font-size: 1.5em;
            font-weight: 900;
            text-align: center;
            margin: 0;
          }
          
          .innerCard {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            cursor: pointer;
          }
          
          .myCard:hover .innerCard {
            transform: rotateY(180deg);
          }
          
          .frontSide,
          .backSide {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 1rem;
            color: white;
            box-shadow: 0 0 0.3em rgba(255, 255, 255, 0.5);
            font-weight: 700;
          }
          
          .frontSide,
          .frontSide::before {
            background: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
          }
          
          .backSide,
          .backSide::before {
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
          }
          
          .backSide {
            transform: rotateY(180deg);
          }
          
          .frontSide::before,
          .backSide::before {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            content: '';
            width: 110%;
            height: 110%;
            position: absolute;
            z-index: -1;
            border-radius: 1em;
            filter: blur(20px);
            animation: animate 5s linear infinite;
          }
          
          @keyframes animate {
            0% {
              opacity: 0.3;
            }
          
            80% {
              opacity: 1;
            }
          
            100% {
              opacity: 0.3;
            }
          }


          
          /* -------------------------------------------------------------------------------------------------------------------------- */
        

        footer {
            width: 100%;
        
            height: 50px;
            background-image: linear-gradient(163deg, #00ff75 0%, #3700ff 100%);
            border-radius: 20px;
            transition: all .3s;
            color: white;
            position: absolute;
            padding-top:20px;
           
            text-align:center;
            font-weight:bold;

            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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


<!------------------------------------------------------------------- skill card------------------------------------------------------ -->
    <div class="myCard">
        <div class="innerCard">
            <div class="frontSide">
                <p class="title"><strong><h1>Skills</h1></strong></p>
                <p>Hover Me</p>
            </div>
            <div class="backSide">
                <p class="title">
                <ul>
            <li>C</li>
            <li>C++</li>
            <li>Web Development</li>
            <li>Java</li>
            <li>DBMS</li>
            <li>DSA</li>
        </ul>
</p>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

    <footer>@copyright Virendra_Portfolio</footer>
    
</body>
</html>