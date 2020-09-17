
    <div class="container cuerpo">
        <div class="row">
            <div class="col-md-12">
                <div class="card m-4">
                    <div class="card-header">
                        <i class="fas fa-list"></i> Productos 
                        
                    </div>
                    <div class="">
                        <form action="#" method="POST" class="form-inline mt-3 ml-3 d-flex justify-content-center">
                                <input class="form-control mr-0 mr-md-2 w-75" type="search" name="busqueda" placeholder="Ingrese su busqueda..." aria-label="Search">
                                <button class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>

                    
                    <div class="p-3">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Importe</th>
                                    <th scope="col">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php  for ($i = 0; $i < $cantidad_productos; $i++) :?>
                                <tr>
                                    <td><?=$xml_obj->producto[$i]->attributes()?></td>
                                    <td><?=$xml_obj->producto[$i]->descripcion?></td>
                                    <td>$<?=$xml_obj->producto[$i]->precio?></td>
                                    <td><?=$xml_obj->producto[$i]->stock?></td>
                                </tr>
                           <?php endfor;?>
                            </tbody>
                        </table>
                    </div>
                    <!--
                    <nav aria-label="Page navigation example">
                                    <ul class="pagination d-flex justify-content-center">
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>-->

                </div>
                                
            </div>






        </div>
    </div>
