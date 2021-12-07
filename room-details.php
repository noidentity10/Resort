<?php include 'header.php';?>

<div class="container">

<h1 class="title">Luxirious Suites</h1>



 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-15"> 
    <p>Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.</p>
    <p>By Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect's natural. Don't stubbornly. Don't stubbornly. Don't stubbornly. -And Gain Power By Learning Ways To Become Peaceful. </p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Amenitites</h3>    
    <ul>
      <li>One of the greatest barriers to making the sale is your prospect.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Unlucky people. Don't stubbornly.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Space in your house How to sell faster than your neighbors</li>
    </ul>
    

    </div>  
    
  </div>
  <button type="button" id="mymodal" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
  Reserve Now
</button>

</div>
                     


</div>
<script>
jQuery(document).ready(function(e) {
    jQuery('#mymodal').trigger('click');
});
</script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width:80%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Reservation Form</h4>
      </div>
      <div class="modal-body">
        <iframe src="reserve.php" style="width:100%;height:80vh" border="0" frameBorder="0">
		</iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>