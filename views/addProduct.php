
<div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit" style="margin-right: 10px;"></i>ADD PRODUCT</h2>                
            </div>
            <div class="box-content">
                <form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="row" >
                        <div class="col-md-6 form-group">
                            <label>Category</label>
                            <select class="form-control col-md-6" name="category">
                              <option value="men" selected>Men</option>
                              <option value="women">Women</option>
                              <option value="children">Children</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Product type</label>
                            <select class="form-control col-md-6" name="product_type">
                              <option value="shirts" selected>Shirts</option>
                              <option value="coats">Coats</option>
                              <option value="t_shirts">T-Shirts</option>
                              <option value="jeans">Jeans</option>
                              <option value="skirts">Skirts</option>
                              <option value="tunics">Tunics</option>
                            </select>
                        </div>                       
                    </div>
                    <div class="form-group">
                        <label>Product name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"  name="product_name" minlength="3" maxlength="255" required="required">
                    </div>
                                       
                    <div class="form-group">
                        <label>Description</label>
                        <textarea  class="form-control" rows="10" cols="30" minlength="50" maxlength="255" required name="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <input type="file" id="exampleInputFile" name="imge" required>
                    </div><br>
                         
                    <input type="submit" class="btn btn-default" name="submit" value="Add product">                  
                </form>

            </div>
        </div>