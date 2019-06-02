
<?php
require_once'app/databases/displaydata.php';
 $banners=new Display('banners');
  $data=$banners->getData();

 
   ?>
<div id='slider'>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <!--wrapper for slides-->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="app/<?=@$data[0]['banners_url']?>"alt="dosa" />
            <div class="carousel-caption">
             <h5></h5>
             <p>Mother of iconic January 25 Revolution figure, Khaled Said, dies</p>
                </div>
          </div>
          <div class="item">
            <img class="second-slide" src="app/<?=@$data[1]['banners_url']?>" alt="idli" />
            <div class="carousel-caption">
             <h5></h5>
             <p>Leo</p>
                </div>
          </div>
       
          <div class="item">
            <img class="third-slide" src="app/<?=@$data[2]['banners_url']?>" alt="vada" width="100%" />
            <div class="carousel-caption">
             <h5></h5>
             <p>Egypts Sisi follows up on construction work in several nationwide new housing projects </p>
                </div>
          </div>
          </div>
        </div>
        <!--Left and right controls-->
        
    
    

</div>