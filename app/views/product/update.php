<div class="dashboard-page-content">
<div class="row mb-9 align-items-center">
<div class="col-xxl-6">
<div class="row">
<div class="col-sm-6 mb-8 mb-sm-0">
<h2 class="fs-4 mb-0">Update Product</h2>
</div>
<form action="updateProduct&id=<?php echo $getOnePd['id'] ?>" method="POST" enctype="multipart/form-data">
<div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
<a href="listProduct"><input class="btn btn-outline-primary me-4" type="button" value="List"></a>
<input type="submit" name="updateproduct" class="btn btn-primary" value="Update">

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
<input type="text" placeholder="Enter the product name" name="name" class="form-control" id="name" value="<?php echo $getOnePd['name'] ?>">
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
<input type="text" placeholder="$00.0" name="price" class="form-control" id="price" value="<?php echo $getOnePd['price'] ?>">
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
        <option <?php if($valueCG['category_name'] == $getOnePd['category_name']) echo "selected" ?> value="<?php echo $valueCG['id'] ?>"><?php echo $valueCG['category_name'] ?> </option>
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
<img src="<?php echo $getOnePd['image'] ?>" alt="" style="max-width: 100px;">
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