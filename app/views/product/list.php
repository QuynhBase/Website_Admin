<div class="dashboard-page-content">
<div class="row mb-9 align-items-center justify-content-between">
<div class="col-md-6 mb-8 mb-md-0">
<h2 class="fs-4 mb-0">Product List</h2>
<p>Lorem ipsum dolor sit amet.</p>
</div>
<div class="col-md-6 d-flex flex-wrap justify-content-md-end">
<input type="button" class="btn btn-outline-primary btn-hover-bg-primary me-4" value="Export">
<input type="button" class="btn btn-outline-primary btn-hover-bg-primary me-4" value="Import">
<a href="addProduct"><input type="submit" class="btn btn-primary" value="Create new"></a>
</div>
</div>
<div class="card mb-4 rounded-4 p-7">
<div class="card-header bg-transparent px-0 pt-0 pb-7">
<div class="row align-items-center justify-content-between">
<div class="col-md-4 col-12 mr-auto mb-md-0 mb-6">
<select class="form-select" name="id_category">
 <?php foreach ($listCategory as $valueCG) {?>
    <option selected data-select2-id="3" value="<?php echo $valueCG['id'] ?>"><?php echo $valueCG['category_name'] ?> </option>
 <?php }?>



</select>
</div>
<div class="col-md-8">
<div class="row justify-content-end flex-nowrap d-flex">
<div class="col-lg-4 col-md-6 col-6">
<input type="date" class="form-control bg-input border-0">
</div>
<div class="col-lg-4 col-md-6 col-6">
<select class="form-select">
<option>Status</option>
<option>All</option>
<option>Paid</option>
<option>Chargeback</option>
<option>Refund</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="card-body px-0 pt-7 pb-0">
<div class="table-responsive">
<table class="table table-hover align-middle table-nowrap mb-0"><tbody>
    <?php foreach ($listProduct as $key => $value) {?>
        <tr>
        <td class="text-center">
        <div class="form-check">
        <input class="form-check-input rounded-0 ms-0" type="checkbox" id="transactionCheck-0">
        <label class="form-check-label" for="transactionCheck-0"></label>
        </div>
        </td>
        <td><?php echo $value['id'] ?></td>
        <td>
        <div class="d-flex align-items-center flex-nowrap">
        <a href="https://templates.g5plus.net/glowing-bootstrap-5/shop/product-details-v1.html" title="Flowers cotton dress">
        <img src="<?php echo $value['image'] ?>" data-src="../assets/images/products/product-03-75x100.jpg" alt="Flowers cotton dress" class="lazy-image" width="60" height="80">
        </a>
        <a href="https://templates.g5plus.net/glowing-bootstrap-5/shop/product-details-v1.html" title="Flowers cotton dress" class="ms-6">
        <p class="fw-semibold text-body-emphasis mb-0"><?php echo $value['name'] ?></p>
        </a>
        </div>
        </td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['category_name'] ?></td>
        <td class="text-center">
        <div class="d-flex flex-nowrap justify-content-center">
        <a href="updateProduct&id=<?php echo $value['id'] ?>" class="btn btn-primary py-4 px-5 btn-xs fs-13px me-4"><i class="far fa-pen me-2"></i> Edit</a>
        <a href="deleteProduct&id=<?php echo $value['id'] ?>" class="btn btn-outline-primary btn-hover-bg-danger btn-hover-border-danger btn-hover-text-light py-4 px-5 fs-13px btn-xs me-4"><i class="far fa-trash me-2"></i> Delete</a>
        </div>
        </td>
        </tr>
    <?php }?>


</tbody>
</table>
</div>
</div>
</div>
<nav aria-label="Page navigation example" class="mt-6 mb-4">
<ul class="pagination justify-content-start">
<li class="page-item active mx-3"><a class="page-link" href="#">01</a></li>
<li class="page-item mx-3"><a class="page-link" href="#">02</a></li>
<li class="page-item mx-3"><a class="page-link" href="#">03</a></li>
<li class="page-item mx-3"><a class="page-link dot" href="#">...</a></li>
<li class="page-item mx-3"><a class="page-link" href="#">16</a></li>
<li class="page-item mx-3">
<a class="page-link" href="#"><i class="far fa-chevron-right"></i></a>
</li>
</ul>
</nav>
</div>