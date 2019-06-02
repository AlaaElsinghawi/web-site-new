<div id="sidebsr">
        	<div class="side">
                <?php

                 require_once"app/databases/displaydata.php";
                 $res=new Display('section');
                  $data=$res->getData();
                  
               
                  foreach ($data as  $value) {
                    if($value['section_status']=='Active')
                    {
                      echo'<div class="side_head"><h1>'.$value['section_name'].'</h1></div>';
                    }
                      $result=new Display('pages');
                     $datapage=$result->getData();
                       foreach ($datapage as $val) {
                         if($value['section_name']==$val['pages_types'] && $value['section_status']=='Active' && $val['pages_status']=='active')
                      {
                        $asd=$val['pages_name'];
                     echo
                   '<div class="side_body">
                    <ul>

                        <li><a href="index.php?section='.$val['pages_name'].'">'.$val['pages_name'].'</a></li>

                    </ul>
                </div>';
                     
                   
                      }

                      }
                     
                     
                  }
               
                ?>
            	
            </div>
        	
        	
        </div>
            
</body>
</html>