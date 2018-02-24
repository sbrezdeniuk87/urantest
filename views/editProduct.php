
<div class="box-content">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr role="row">
        <th class="sorting_asc text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: auto;">Id</th>
         <th class="sorting_asc text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: auto;">Category</th>
          <th class="sorting_asc text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: auto;">Product Type</th>
        <th class="sorting_asc text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 250px;">Name</th>
        <th class="sorting text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width: 250px;">Description</th>
        <th class="sorting text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: auto;">Image</th>
        <th class="sorting text-center" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 190px;">Action</th></tr>
    </thead>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all">
    <?php
        for($i=0; $i<count($allClothes); $i++){
            $productType = $allClothes[$i]['product_type_id']; 

            switch ($productType) {
                case 1:
                    $allClothes[$i]['product_type_id'] = 'Shirts';
                    break;
                case 2:
                    $allClothes[$i]['product_type_id'] = 'Coats';
                    break;
                case 3:
                    $allClothes[$i]['product_type_id'] = 'T-Shirts';
                    break;
                case 4:
                    $allClothes[$i]['product_type_id'] = 'Jeans';
                    break;
                case 5:
                    $allClothes[$i]['product_type_id'] = 'Skirts';
                    break;
                case 6:
                    $allClothes[$i]['product_type_id'] = 'Tunics';
                    break;           
            }
            $categoryId = $allClothes[$i]['category_id'];
            switch ($categoryId) {
                case 1:
                    $allClothes[$i]['category_id'] = 'Men';
                    break;
                case 2:
                    $allClothes[$i]['category_id'] = 'Women';
                    break;
                case 3:
                    $allClothes[$i]['category_id'] = 'Children';
                    break;
            }
            echo '<tr class="odd">
        <td class="text-center">'.$allClothes[$i]["id"].'</td>
        <td class="text-center">'.$allClothes[$i]["category_id"].'</td>
        <td class="text-center">'.$allClothes[$i]["product_type_id"].'</td>
        <td class="center">'.$allClothes[$i]["name"].'</td>
        <td class="center">'.$allClothes[$i]["description"].'</td>
        <td class="text-center"><img src="'.$allClothes[$i]["image"].'" style="width:180px;height:200px;"></td>
       
        <td class="text-center">
            
            <a class="btn btn-info" href="?page=editProduct&action=edit&id='.$allClothes[$i]["id"].'">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="?page=editProduct&action=delete&id='.$allClothes[$i]["id"].'">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>'; 
        }
    ?>
    
    
        </td> 
    </tbody></table></div>
    </div>