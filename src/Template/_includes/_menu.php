<?php


require_once dirname(__DIR__, 3) . '/vendor/autoload.php';

?>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php"><img src="../Template/assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="../Template/assets/img/icons/product.svg" alt="img"><span> Produtos</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="produto.php">Produtos</a></li>
                        <!-- <li><a href="addproduct.html">Add Product</a></li> -->
                        <li><a href="categoria.php">Categorias</a></li>
                        <!-- <li><a href="addcategory.html">Add Category</a></li> -->
                        <li><a href="subcategoria.php">Sub-categorias</a></li>
                        <!-- <li><a href="subaddcategory.html">Add Sub Category</a></li> -->
                        <li><a href="marca.php">Marcas</a></li>
                        <!-- <li><a href="addbrand.html">Add Brand</a></li> -->
                        <li><a href="importar_produto.php">Importar Produtos</a></li>
                        <li><a href="cod_barra.php">Impressão de etiquetas</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="../Template/assets/img/icons/users1.svg" alt="img"><span> Pessoas</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="clientes.php">Clientes</a></li>
                       
                      
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="../Template/assets/img/icons/sales1.svg" alt="img"><span> Vendas</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="vendas.php">Vendas realizadas</a></li>
                        <li><a href="pos.php">PDV</a></li>
                        <li><a href="nova_venda.php">Nova venda</a></li>
                        <li><a href="devolucao_venda.php">Vendas estornadas</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="components.html"><i data-feather="layers"></i><span> Components</span> </a>
                </li>
                <li>
                    <a href="blankpage.html"><i data-feather="file"></i><span> Blank Page</span> </a>
                </li>
                
                
            </ul>
        </div>
    </div>
</div>
