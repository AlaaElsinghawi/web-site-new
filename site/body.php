<div id="latestprojects">
   <h1><?= isset($_GET['section']) ? $_GET['section']:$_GET['section']='political arbic world'?></h1>
              <?php
              require_once'app/databases/displaydata.php';

                   $shownews=new Display('sub_pages');
                   $res=$shownews->getData();
                   $shownews=new Display('pages');
                   $res2=$shownews->getData();
                  
                   foreach ($res as $value) {
                     if(isset($_GET['section']) && $_GET['section']===$value['sub_pages_types'] && $value['subpages_status']==='active')
                     {
                         echo'
                    <div class="project">
                  <img src="app/'.$value['sub_pages_images'].'" width="140" height="100" />
                    <h2>'.substr($value['subpages_name'],0,40).'</h2>
                    <p>
                      '.substr($value['subpages_content'],0,80).'.....
                                       
                    </p>
                    <a href="shownews.php?id='.$value['id'].'">Read more »</a>
                </div>';
                     }
                   }


              ?>

             

            	 </div>
                
</body>
</html>