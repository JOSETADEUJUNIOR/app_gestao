<?php require_once dirname(__DIR__, 2) . '/vendor/autoload.php'; ?>
<!DOCTYPE html>
<?php include_once PATH_URL . '/Template/_includes/_head.php' ?>

<body cz-shortcut-listen="true">


    <?php include_once PATH_URL . '/Template/_includes/_topo.php' ?>
    </div>

    <?php include_once PATH_URL . '/Template/_includes/_menu.php' ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Listagem de produtos</h4>
                    <h6>Gerencie seus produtos</h6>
                </div>
                <div class="page-btn">
                    <a href="novo_produto.php" class="btn btn-added"><img src="../Template/assets/img/icons/plus.svg" alt="img" class="me-1">Novo produto</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="../Template/assets/img/icons/filter.svg" alt="img">
                                    <span><img src="../Template/assets/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="../Template/assets/img/icons/search-white.svg" alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="pdf" aria-label="pdf"><img src="../Template/assets/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="excel" aria-label="excel"><img src="../Template/assets/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="print" aria-label="print"><img src="../Template/assets/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-0" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Product</option>
                                                        <option>Macbook pro</option>
                                                        <option>Orange</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Category</option>
                                                        <option>Computers</option>
                                                        <option>Fruits</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Choose Sub Category</option>
                                                        <option>Computer</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Brand</option>
                                                        <option>N/D</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg col-sm-6 col-12 ">
                                                <div class="form-group">
                                                    <select class="select">
                                                        <option>Price</option>
                                                        <option>150.00</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <a class="btn btn-filters ms-auto"><img
                                                            src="../Template/assets/img/icons/search-whites.svg" alt="img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <table class="table datanew dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                            
                                                
                                                
                                            
                                        : activate to sort column descending" style="width: 35.2969px;">
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product Name: activate to sort column ascending" style="width: 122.484px;">Product Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="SKU: activate to sort column ascending" style="width: 29.8281px;">SKU</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Category : activate to sort column ascending" style="width: 61.0781px;">Category </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Brand: activate to sort column ascending" style="width: 40.7656px;">Brand</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="price: activate to sort column ascending" style="width: 33.75px;">price</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Unit: activate to sort column ascending" style="width: 27.4844px;">Unit</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 23.5938px;">Qty</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created By: activate to sort column ascending" style="width: 74.375px;">Created By</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 84.3438px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>











                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product1.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook pro</a>
                                        </td>
                                        <td>PT001</td>
                                        <td>Computers</td>
                                        <td>N/D</td>
                                        <td>1500.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product2.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Orange</a>
                                        </td>
                                        <td>PT002</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product3.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Pineapple</a>
                                        </td>
                                        <td>PT003</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product4.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Strawberry</a>
                                        </td>
                                        <td>PT004</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product5.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Avocat</a>
                                        </td>
                                        <td>PT005</td>
                                        <td>Accessories</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>150.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product6.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Macbook Pro</a>
                                        </td>
                                        <td>PT006</td>
                                        <td>Shoes</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product7.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Apple Earpods</a>
                                        </td>
                                        <td>PT007</td>
                                        <td>Shoes</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product8.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">iPhone 11 </a>
                                        </td>
                                        <td>PT008</td>
                                        <td>Fruits</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product9.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">samsung </a>
                                        </td>
                                        <td>PT009</td>
                                        <td>Earphones</td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>pc</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td class="sorting_1">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="../Template/assets/img/product/product11.jpg" alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Banana</a>
                                        </td>
                                        <td>PT0010</td>
                                        <td>Health Care </td>
                                        <td>N/D</td>
                                        <td>10.00</td>
                                        <td>kg</td>
                                        <td>100.00</td>
                                        <td>Admin</td>
                                        <td>
                                            <a class="me-3" href="product-details.html">
                                                <img src="../Template/assets/img/icons/eye.svg" alt="img">
                                            </a>
                                            <a class="me-3" href="editproduct.html">
                                                <img src="../Template/assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);">
                                                <img src="../Template/assets/img/icons/delete.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


    <?php include_once PATH_URL . './Template/_includes/_scripts.php' ?>

    <script src="../Template/assets/js/script.js"></script>


</body>