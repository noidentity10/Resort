
  
  
<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

/* Colors */
/* ---------------------------------------- */
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  text-align: center;
  font-family: 'Lato', 'sans-serif';
  font-weight: 400;
}

a {
  text-decoration: none;
}

.info-text {
  text-align: left;
  width: 100%;
}

header, form {
  padding: 4em 10%;
}

.form-group {
  margin-bottom: 20px;
}

h2.heading {
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 300;
  text-align: left;
  color: #506982;
  border-bottom: 1px solid #506982;
  padding-bottom: 3px;
  margin-bottom: 20px;
}

.controls {
  text-align: left;
  position: relative;
}
.controls input[type="text"],
.controls input[type="email"],
.controls input[type="number"],
.controls input[type="date"],
.controls input[type="tel"],
.controls textarea,
.controls button,
.controls select {
  padding: 12px;
  font-size: 14px;
  border: 1px solid #c6c6c6;
  width: 100%;
  margin-bottom: 18px;
  color: #888;
  font-family: 'Lato', 'sans-serif';
  font-size: 16px;
  font-weight: 300;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.controls input[type="text"]:focus, .controls input[type="text"]:hover,
.controls input[type="email"]:focus,
.controls input[type="email"]:hover,
.controls input[type="number"]:focus,
.controls input[type="number"]:hover,
.controls input[type="date"]:focus,
.controls input[type="date"]:hover,
.controls input[type="tel"]:focus,
.controls input[type="tel"]:hover,
.controls textarea:focus,
.controls textarea:hover,
.controls button:focus,
.controls button:hover,
.controls select:focus,
.controls select:hover {
  outline: none;
  border-color: #9FB1C1;
}
.controls input[type="text"]:focus + label, .controls input[type="text"]:hover + label,
.controls input[type="email"]:focus + label,
.controls input[type="email"]:hover + label,
.controls input[type="number"]:focus + label,
.controls input[type="number"]:hover + label,
.controls input[type="date"]:focus + label,
.controls input[type="date"]:hover + label,
.controls input[type="tel"]:focus + label,
.controls input[type="tel"]:hover + label,
.controls textarea:focus + label,
.controls textarea:hover + label,
.controls button:focus + label,
.controls button:hover + label,
.controls select:focus + label,
.controls select:hover + label {
  color: #bdcc00;
  cursor: text;
}
.controls .fa-sort {
  position: absolute;
  right: 10px;
  top: 17px;
  color: #999;
}
.controls select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}
.controls label {
  position: absolute;
  left: 8px;
  top: 12px;
  width: 60%;
  color: #999;
  font-size: 16px;
  display: inline-block;
  padding: 4px 10px;
  font-weight: 400;
  background-color: rgba(255, 255, 255, 0);
  -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
  -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
  transition: color 0.3s, top 0.3s, background-color 0.8s;
  background-color: white;
}
.controls label.active {
  top: -11px;
  color: #555;
  background-color: white;
  width: auto;
}
.controls textarea {
  resize: none;
  height: 200px;
}

button {
  cursor: pointer;
  background-color: #1b3d4d;
  border: none;
  color: #fff;
  padding: 12px 0;
  float: right;
}
button:hover {
  background-color: #224c60;
}

.clear:after {
  content: "";
  display: table;
  clear: both;
}

.grid {
  background: white;
}
.grid:after {
  /* Or @extend clearfix */
  content: "";
  display: table;
  clear: both;
}

[class*='col-'] {
  float: left;
  padding-right: 10px;
}
.grid [class*='col-']:last-of-type {
  padding-right: 0;
}

.col-2-3 {
  width: 66.66%;
}

.col-1-3 {
  width: 33.33%;
}

.col-1-2 {
  width: 50%;
}

.col-1-4 {
  width: 25%;
}

@media (max-width: 760px) {
  .col-1-4-sm, .col-1-3, .col-2-3 {
    width: 100%;
  }

  [class*='col-'] {
    padding-right: 0px;
  }
}
.col-1-8 {
  width: 12.5%;
}
</style>
<form action="rexec.php" method="POST">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading">Booking & contact</h2>
    <div class="controls">
	Name:<br>
      <input type="text" id="name" name="name">
    </div>
    <div class="controls">
	Email:<br>
      <input type="text" id="email" class="floatLabel" name="email">
    </div>       
    <div class="controls">
	Contact Number:<br>
      <input type="tel" id="phone" class="floatLabel" name="contact">
    </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
		  Street:<br>
           <input type="text" id="street" class="floatLabel" name="street">
          </div>          
        </div>
        <div class="col-1-3">
          <div class="controls">
		  House Number:<br>
            <input type="number" id="street-number" class="floatLabel" name="number">
          </div>          
        </div>
      </div>
      <div class="grid">
        <div class="col-2-3">
          <div class="controls">
		  City:<br>
            <input type="text" id="city" class="floatLabel" name="city">
          </div>         
        </div>
        <div class="col-1-3">
          <div class="controls">
		  Postal Code:<br>
            <input type="text" id="post-code" class="floatLabel" name="postal">
          </div>         
        </div>
      </div>
      
  </div>
  <!--  Details -->
  <div class="form-group">
    <h2 class="heading">Details</h2>
    <div class="grid">
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        Arrive Date:
        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
      </div>      
    </div>
    <div class="col-1-4 col-1-4-sm">
      <div class="controls">
        Depart Date:
        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
      </div>      
    </div>
      </div>
      <div class="grid">
    <div class="col-1-3 col-1-3-sm">
      <div class="controls">
	  Number of People:<br>
        <i class="fa fa-sort"></i>
        <select class="floatLabel" name="people">
          <option value="blank"></option>
          <option value="1">1</option>
          <option value="2" selected>2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>      
    </div>
    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
	 Room Type:<br> 
      <select class="floatLabel" name="room">
        <option value="blank"></option>
        <option value="deluxe" selected>With Bathroom</option>
        <option value="Zuri-zimmer">Without Bathroom</option>
      </select>
     </div>     
    </div>

    <div class="col-1-3 col-1-3-sm">
    <div class="controls">
      <i class="fa fa-sort"></i>
	  Bedding:<br>
      <select class="floatLabel" name="bedding">
        <option value="blank"></option>
        <option value="single-bed">Single Bed</option>
        <option value="double-bed" selected>Double Bed</option>
        <option value="double-bed" selected>Family</option>
      </select>
     </div>     
    </div>
      
     </div>
      <div class="grid">
        <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
        <br>
        <div class="controls">
          <textarea name="comment" class="floatLabel" id="comments"></textarea>
          </div>
            <button type="submit" value="Submit" class="col-1-4">Submit</button>
      </div>  
  </div> <!-- /.form-group -->
</form>