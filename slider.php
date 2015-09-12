<?php
/*
 * Author      : Chocks
 * Date        : September, 6th 2015
 * Version     : 1
 * Description : Implmented bootstrap carousel functionality for main page
 */

echo '
<style>
.carousel-inner .item img{
   margin:0 auto;
  }
</style>
<div class="clear-top">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"</li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
    <li data-target="#carousel-example-generic" data-slide-to="11"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" style="background-color:lightblue;">
      <div class="item active" data-id="1">
        <img src="slide_img/slide1.jpg" alt="1"/>';
          getCenterTile();
          echo '
      </div>
      <div class="item" data-id="2">
        <img src="slide_img/slide2.jpg" alt="2"/>';
            getCenterTile();
            echo '
      </div>
      <div class="item" data-id="3">
        <img src="slide_img/slide3.jpg" alt="3"/>';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="4">
        <img src="slide_img/slide4.jpg" alt="4"/>';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="5">
        <img src="slide_img/slide5.jpg" alt="5"/>';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="6">
        <img src="slide_img/slide6.jpg" alt="6" />';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="7">
        <img src="slide_img/slide7.jpg" alt="7" />';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="8">
        <img src="slide_img/slide8.jpg" alt="8" />';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="9">
        <img src="slide_img/slide9.jpg" alt="9" />';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="10">
        <img src="slide_img/slide10.jpg" alt="10"/>';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="11">
        <img src="slide_img/slide11.jpg" alt="11" />';
             echo getCenterTile();
             echo '
      </div>
      <div class="item" data-id="12">
        <img src="slide_img/slide12.jpg" alt="12" />';
             echo getCenterTile();
             echo '
      </div>
    </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
';

function getCenterTile() {
  echo '
  <div class="carousel-caption">
  </div>';
}
?>
