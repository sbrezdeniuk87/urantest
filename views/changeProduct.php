
<div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit" style="margin-right: 10px;"></i>ADD PRODUCT</h2>                
            </div>
            <div class="box-content">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Product name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"  name="product_name" minlength="3" maxlength="255" required="required" value="<?= $record['name'] ?>">
                    </div>
                                       
                    <div class="form-group">
                        <label>Description</label>
                        <textarea  class="form-control" rows="10" cols="30" minlength="50" maxlength="255" required name="description">
                          <?= $record['description'] ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                      <img src="<?= $record['image'] ?>" style="width:180px;height:200px;"><br>
                      <label for="exampleInputFile">Image</label>
                      <input type="file" id="exampleInputFile" name="imge">
                    </div><br>
                         
                    <input type="submit" class="btn btn-default" name="edit_submit" value="Edit product">                  
                </form>

            </div>
        </div>