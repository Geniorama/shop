<?php include 'header.php'; ?>

    <main class="categories">
        <div class="title-heading py-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <h1>Plantillas web</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="sidebar-shop px-3">
                            <div class="category">
                                <h3>Categorias</h3>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="#" class="nav-link">Categoría 1</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Categoría 2</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Categoría 3</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">Categoría 4</a></li>
                                </ul>
                            </div>
                            <hr class="my-3">
                            <div class="filter-by-price">
                                <h3>Filtrar por precio</h3>
                                <div class="filter d-flex align-items-center mb-2">
                                    <div class="point start"></div>
                                    <div class="bar"></div>
                                    <div class="point end"></div>
                                </div>
                                <p>$12.000</p>
                            </div>
                            <hr class="my-3">
                            <div class="filter-software">
                                    <h3>Software</h3>
                                    <form action="">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-3">
                                <div class="filter-tags">
                                    <h3>Tags</h3>
                                    <form action="">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="content-shop">
                            <img src="https://picsum.photos/1280/600" alt="" class="img-fluid">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <form action="" class="form-inline align-items-center mb-3">
                                            <label for="ordering" class="mr-2">Ordenar por</label>
                                            <select name="" id="ordering" class="custom-select">
                                                <option value="">Menor precio</option>
                                                <option value="">Mayor precio</option>
                                            </select>
                                        </form>
                                        <p>Mostrando <span class="num-show">9</span> de <span class="num-results">500</span> resultados</p>
                                    </div>

                                    <div class="container-products mt-3">
                                        <div class="card mb-4">
                                            <div class="row">
                                                <div class="col-12 col-md-5">
                                                    <img src="https://picsum.photos/1280/920" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-12 col-md-7">
                                                     <div class="card-body pl-0 py-4">
                                                        <a href="single-product.php" class="link"><h5 class="card-title">Template happy</h5></a>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <p>Precio: <span class="price">$20.000</span></p>
                                                        <div class="buttons position-absolute">
                                                            <a href="#" class="btn btn-outline-secondary"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                                            <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-4">
                                            <div class="row">
                                                <div class="col-12 col-md-5">
                                                    <img src="https://picsum.photos/1280/920" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-12 col-md-7">
                                                     <div class="card-body pl-0 py-4">
                                                        <h5 class="card-title">Template happy</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <p>Precio: <span class="price">$20.000</span></p>
                                                        <div class="buttons position-absolute">
                                                            <a href="#" class="btn btn-outline-secondary"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                                            <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-4">
                                            <div class="row">
                                                <div class="col-12 col-md-5">
                                                    <img src="https://picsum.photos/1280/920" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-12 col-md-7">
                                                     <div class="card-body pl-0 py-4">
                                                        <h5 class="card-title">Template happy</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <p>Precio: <span class="price">$20.000</span></p>
                                                        <div class="buttons position-absolute">
                                                            <a href="#" class="btn btn-outline-secondary"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                                            <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-4">
                                            <div class="row">
                                                <div class="col-12 col-md-5">
                                                    <img src="https://picsum.photos/1280/920" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-12 col-md-7">
                                                     <div class="card-body pl-0 py-4">
                                                        <h5 class="card-title">Template happy</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <p>Precio: <span class="price">$20.000</span></p>
                                                        <div class="buttons position-absolute">
                                                            <a href="#" class="btn btn-outline-secondary"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                                            <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-4">
                                            <div class="row">
                                                <div class="col-12 col-md-5">
                                                    <img src="https://picsum.photos/1280/920" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-12 col-md-7">
                                                     <div class="card-body pl-0 py-4">
                                                        <h5 class="card-title">Template happy</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <p>Precio: <span class="price">$20.000</span></p>
                                                        <div class="buttons position-absolute">
                                                            <a href="#" class="btn btn-outline-secondary"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                                            <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-4">
                                            <div class="row">
                                                <div class="col-12 col-md-5">
                                                    <img src="https://picsum.photos/1280/920" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-12 col-md-7">
                                                     <div class="card-body pl-0 py-4">
                                                        <h5 class="card-title">Template happy</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <p>Precio: <span class="price">$20.000</span></p>
                                                        <div class="buttons position-absolute">
                                                            <a href="#" class="btn btn-outline-secondary"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                                            <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buttons-nav d-flex align-items-center">
                                            <button class="button left"><i class="fas fa-angle-left"></i></button>
                                            <button class="button ml-3"><span class="nav-num">1</span></button>
                                            <button class="button ml-2"><span class="nav-num">2</span></button>
                                            <button class="button ml-2"><span class="nav-num">3</span></button>
                                            <button class="button right ml-3"><i class="fas fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>