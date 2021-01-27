
{%extends "base.html"%}
{% block content %}
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form { border: 10px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 5px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/*img.avatar {
  width: 40%;
  border-radius: 50%;
}*/

.container {
  padding: 16px;
}

span.password {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.password {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<br> 

<h2>Please Login</h2>

<br> 

<form action="" method="post">

  <!-- TO ADD AN AVATAR
    <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <input type="text" placeholder="Enter Email Address" name="username" value="{{ request.form.username }}" required>

    <input type="password" placeholder="Enter Password" name="password" value="{{request.form.password }}" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="/welcome"><button type="button" class="cancelbtn" value="Cancel">Cancel</button></a>
    <span class="password">Forgot <a href="#">password?</a></span>
  </div>
</form>


{% endblock %}