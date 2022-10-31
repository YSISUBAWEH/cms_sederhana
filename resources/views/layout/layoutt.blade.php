<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Page | Code Info</title>
    <style type="text/css">
body{ 
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}

.conatiner{
    width:100% auto;
    height: 100% auto;
    background-color: red;
}

a{
    text-decoration: none;
}

header{
    display: flex;
}



.label{
    margin: 29px 0 0 5%;
}

.label a{
    color: blue;
    font-size: 30px;
    font-weight: bold;
    text-transform: uppercase;
}

.navbar {
    margin-left: 35%;
    border-radius: 10px;
    box-shadow: 5px 5px 10px rgb(119, 109, 109), -5px -5px 10px rgb(163, 154, 154);
}

.navbar ul{
    list-style: none;
    display: flex;
}

.navbar ul li{
    padding: 15px;
}

.navbar ul li a{
    color: black;
    font-size: 20px;
    font-weight: 600;
}

.navbar ul li .btn{
    width: auto;
    height: 40px;
    background: purple;
    color: white;
    border-radius: 30px;
    outline: none;
    border: none;
    cursor: pointer;
}

.body-content{
    display:flex;
}

</style>
  </head>
  <body>
    <div class="conatiner">
      <header>
        <div class="label">
          <a href="#">Code</a>
        </div>
        <div class="navbar">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><button class="btn">Sign Up</button></li>
          </ul>
        </div>
      </header>
      <div class="body-content">
       @yield('content')    
    </div>
  </body>
</html>