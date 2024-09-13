<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>
	<style>
				body{
            font-family: Arial, sans-serif;
            background-color: lightgoldenrodyellow;
            margin: 0;
            padding: 0;
             
        }
        .img{
          margin-left: 100px;
          margin-top: 50px;
          padding:0;
          border-radius: 10%;
          width: 420px;
          height: 450px;
          border-radius: 20%;
          background-color: lightcyan;
           }
        .hobbies h5{
          text-align: center;
          margin-top: 40px;
          margin: -30px;
          padding: 3px;  
          margin-top: -45px;
          width: 500px;
          font-size: 30px;
        }
        .hobbies{
          text-align: left;
          margin: 100px;
          margin-top: -50px;
          padding: 100px;
          font-size: 30px;
          text-align: center;
          justify-items: 100vh;
          text-align: justify;
          width: 450px;
          height: 150px;
          margin-left: 550px;
          margin-top: -450px;
          padding: 50px;
          border-radius: 30px;
           }
           .logo{
            font-weight: bold;
            color: black;
            font-size: 50px;
            font-family: sans-serif;
            cursor: pointer;
           }

           .nav-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left: 15px;
            margin-right: 15px;
            text-transform: capitalize;
           }
           span{
            color: red;
           }
           nav ul li{
            list-style: none;
            display: inline-block;
            padding-left: 60px;
           }
           nav ul li a{
            color: black;
            font-weight: bold;
            font-size: 25px;
            text-transform: capitalize;
            text-decoration: none;
           }
           .btn{
            background-color: red;
            padding: 10px 30px;
            border-radius: 15px;
            text-decoration: none;
            text-transform: capitalize;
            font-weight: bold;
            color: white;
           }
           .
    </style>

    <div class="nav-bar">
      <h2 class="logo">Lai<span>la</span></h2>
      <nav>
        <ul>
          <li> <a href="info.php">Personal Information</a> </li>
          <li> <a href="interest.php">Interest</a> </li>
          <li> <a href="hobbies.php">Hobbies</a> </li>
          <li> <a href="education.php">Education Background</a> </li>
        </ul>
      </nav>
      <a href="profile.php" class="btn">Home</a>
      
    </div>


<!-- <div class="web">
  <h2> My Personal Information </h2>
</div> -->
<div class="name">
<img src="img/prof.jpg" class="img">
</div>
<div class="hobbies">
  <h5> My Hobbies </h5>
  <br>
  <br>
  <li> Playing Sports</li><br>
  <li> Playing Mobile Games </li><br>
  <li> Reading Books</li><br>
  <li> Watching Movies </li><br>
  <li> Singing </li>
</div>
</body>
</html> 