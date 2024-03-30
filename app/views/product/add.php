<div class="dashboard-page-content">
<div class="row mb-9 align-items-center">
<div class="col-xxl-6">
<div class="row">
<div class="col-sm-6 mb-8 mb-sm-0">
<h2 class="fs-4 mb-0">Add New Product</h2>
</div>
<form action="addProduct" method="POST" enctype="multipart/form-data">
<div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
<a href="listProduct"><input class="btn btn-outline-primary me-4" type="button" value="List"></a>
<input type="submit" name="addproduct" class="btn btn-primary" value="Add New">

</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xxl-6">
<div class="card mb-4">
<div class="card-body p-7">
<div class="row">
<div class="col-md-3">
<h6 class="fs-6 fw-500">1. General info</h6>
</div>
<div class="col-md-9">
<div class="mb-7">
<label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Product Name</label>
<input type="text" placeholder="Enter the product name" name="name" class="form-control" id="name">
        <?php
            echo(!empty($error_messages['name']['required']))?'<span style="color: red;">'.$error_messages['name']['required'].'</span>':false;
            echo(!empty($error_messages['name']['length']))?'<span style="color: red;">'.$error_messages['name']['length'].'</span>':false;
        
        ?>
</div>
</div>
</div>
<hr class="mb-7 mt-0">
<div class="row">
<div class="col-md-3">
<h6 class="fs-6 fw-500">2. Pricing</h6>
</div>
<div class="col-md-9">
<div class="mb-7">
<label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="cost">Cost in USD</label>
<input type="text" placeholder="$00.0" name="price" class="form-control" id="price">
</div>
</div>
</div>
<hr class="mb-7 mt-0">
<div class="row">
<div class="col-md-3">
<h6 class="fs-6 fw-500">3. Category</h6>
</div>
<div class="col-md-9">
<div class="mb-7">
<label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="brand-name">Brand name</label>
<select class="form-select" id="id_category" name="id_category">
    <?php foreach ($listCategory as $valueCG) {?>
        <option value="<?php echo $valueCG['id'] ?>"><?php echo $valueCG['category_name'] ?> </option>
    <?php }?>
</select>
</div>
</div>
</div>
<hr class="mb-7 mt-0">
<div class="row">
<div class="col-md-3">
<h6 class="fs-6 fw-500">4. Media</h6>
</div>
<div class="col-md-9">
<div class="mb-7">
<label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase">Images</label>
<input class="form-control" type="file" name="image" id="image">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>