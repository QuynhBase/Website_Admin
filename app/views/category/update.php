<div class="dashboard-page-content">
<div class="row mb-9 align-items-center">
<div class="col-xxl-6">
<div class="row">
<div class="col-sm-6 mb-8 mb-sm-0">
<h2 class="fs-4 mb-0">Add New Category</h2>
</div>
<form action="updateCategory&id=<?php echo $getOne['id'] ?>" method="POST" >
<div class="col-sm-6 d-flex flex-wrap justify-content-sm-end">
<a href="listCategory"><input class="btn btn-outline-primary me-4" type="button" value="List"></a>
<input class="btn btn-primary" type="submit" name="update" value="Update">

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
<h6 class="fs-6 fw-500">1. Update Category</h6>
</div>
<div class="col-md-9">
<div class="mb-7">
<label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="product-title">Category id</label>
<input type="text" name="id" placeholder="Enter the id" class="form-control" id="id" value="<?php echo $getOne['id'] ?>">
</div>
<div class="mb-7">
<label class="mb-4 fs-13px ls-1 fw-semibold text-uppercase" for="description">Category name</label>
<input type="text" name="categoryname" placeholder="Enter the name" class="form-control" id="categoryname" value="<?php echo $getOne['category_name'] ?>">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>