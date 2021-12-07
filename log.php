<?php include 'header.php';?>
<div class="container">

<h1 class="title">Login</h1>
<style>

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
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

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>

<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
       	</div>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       	 <div>
  <form class="modal-content animate" action="login.php" method="post"  style="width:500px">
    <div class="imgcontainer">

      <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container"   style="width:500px">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    
  </form>


       	</div>

       	</div>

       	</div>

       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>