<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-th" style="margin-right: 10px;"></i>PRODUCTS</h2>
               </div>
                   <div class="box-content">
                    <div class="row">
                         <?php
                            for ($i=0; $i < count($allClothes); $i++) { 
                                echo '<div class="col-lg-6 col-md-6">
                                    <h1>'.$allClothes[$i]["name"].'<br>
                                        <small>Discription:'.$allClothes[$i]["description"].'</small>                                       
                                    </h1>
                                    <p><img src="'.$allClothes[$i]["image"].'" style="width:180px;height:200px;"></p>
                                    <br></div>';
                            }
                          ?>                      
                        
                        
                        
                       </tbody>
                       </table>
                       
                       <div class="row">
                        <div class="col-md-12"></div>
                        <div class="col-md-12 center-block">
                        </div></div></div>
                    </div>
                </div>
            </div>

        </div>        
    
</div>
        