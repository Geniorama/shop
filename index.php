<?php include 'header.php'; ?>

    <main class="main-home">
        <div class="container-fluid p-0"></div>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://picsum.photos/1920/768" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/1920/768" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/1920/768" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div>
<!--HOME CATEGORIES SECTION-->
        <section class="section-interior primary" id="home-categories">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mb-5">
                        <h2>Categorías</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nobis eveniet explicabo aspernatur delectus necessitatibus, nisi voluptas aut! Debitis accusamus minima eligendi possimus, tempore vero dolorum cum assumenda maiores minus.</p>
                    </div>


                    <div class="owl-carousel">
                        <div class="item-owl p-3">
                            <figure class="position-relative">
                                <img src="https://picsum.photos/500/650" alt="" class="img-fluid">
                                <a href="categories-shop.php">
                                    <figcaption class="p-5 text-light position-absolute d-flex flex-column justify-content-center align-items-center">
                                        <h4>Plantillas Web</h4>
                                        <hr>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                        <div class="item-owl p-3">
                            <figure class="position-relative">
                                <img src="https://picsum.photos/500/650" alt="" class="img-fluid">
                                <a href="">
                                    <figcaption class="p-5 text-light position-absolute d-flex flex-column justify-content-center align-items-center">
                                        <h4>Presentaciones PPT</h4>
                                        <hr>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                        <div class="item-owl p-3">
                            <figure class="position-relative">
                                <img src="https://picsum.photos/500/650" alt="" class="img-fluid">
                                <a href="">
                                    <figcaption class="p-5 text-light position-absolute d-flex flex-column justify-content-center align-items-center">
                                        <h4>Diseño Publicitario</h4>
                                        <hr>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                        <div class="item-owl p-3">
                            <figure class="position-relative">
                                <img src="https://picsum.photos/500/650" alt="" class="img-fluid">
                                <a href="">
                                    <figcaption class="p-5 text-light position-absolute d-flex flex-column justify-content-center align-items-center">
                                        <h4>Plantillas HTML</h4>
                                        <hr>
                                        <p>Lorem ipsum dolor sit.</p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<hr>

<!--LATEST PRODUCTS SECTION-->
        <section class="section-interior secondary" id="latest-products">
            <div class="container">
                <div class="row">
                    <!--Categories-->
                    <div class="col-12 mb-5">
                        <ul class="nav justify-content-center links-categories">
                            <li class="nav-item"><a href="#" class="nav-link active">Nuevos</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Más populares</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Gratis</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Nuevos</a></li>
                        </ul>
                    </div>

                    <!--Products Home-->
                    <div class="col-12 col-md-4">
                        <div class="product-home">
                            <figure>
                                <div class="box-img position-relative">
                                    <img src="https://picsum.photos/500/400" alt="" class="img-fluid position-relative">
                                    <figcaption class="position-absolute d-flex justify-content-center align-items-end">
                                        <a href="#" class="btn btn-light"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                        <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                    </figcaption>
                                </div>
                            </figure>
                            <div class="caption text-center">
                                <div class="title"><a href="#">Template Happy</a></div>
                                <div class="price"><h5>$13.000</h5></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="product-home">
                            <figure>
                                <div class="box-img position-relative">
                                    <img src="https://picsum.photos/500/400" alt="" class="img-fluid position-relative">
                                    <figcaption class="position-absolute d-flex justify-content-center align-items-end">
                                        <a href="#" class="btn btn-light"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                        <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                    </figcaption>
                                </div>
                            </figure>
                            <div class="caption text-center">
                                <div class="title"><a href="#">Template Happy</a></div>
                                <div class="price"><h5>$13.000</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="product-home">
                            <figure>
                                <div class="box-img position-relative">
                                    <img src="https://picsum.photos/500/400" alt="" class="img-fluid position-relative">
                                    <figcaption class="position-absolute d-flex justify-content-center align-items-end">
                                        <a href="#" class="btn btn-light"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                        <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                    </figcaption>
                                </div>
                            </figure>
                            <div class="caption text-center">
                                <div class="title"><a href="#">Template Happy</a></div>
                                <div class="price"><h5>$13.000</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="product-home">
                            <figure>
                                <div class="box-img position-relative">
                                    <img src="https://picsum.photos/500/400" alt="" class="img-fluid position-relative">
                                    <figcaption class="position-absolute d-flex justify-content-center align-items-end">
                                        <a href="#" class="btn btn-light"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                        <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                    </figcaption>
                                </div>
                            </figure>
                            <div class="caption text-center">
                                <div class="title"><a href="#">Template Happy</a></div>
                                <div class="price"><h5>$13.000</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="product-home">
                            <figure>
                                <div class="box-img position-relative">
                                    <img src="https://picsum.photos/500/400" alt="" class="img-fluid position-relative">
                                    <figcaption class="position-absolute d-flex justify-content-center align-items-end">
                                        <a href="#" class="btn btn-light"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                        <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                    </figcaption>
                                </div>
                            </figure>
                            <div class="caption text-center">
                                <div class="title"><a href="#">Template Happy</a></div>
                                <div class="price"><h5>$13.000</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="product-home">
                            <figure>
                                <div class="box-img position-relative">
                                    <img src="https://picsum.photos/500/400" alt="" class="img-fluid position-relative">
                                    <figcaption class="position-absolute d-flex justify-content-center align-items-end">
                                        <a href="#" class="btn btn-light"><span>Previsualizar</span> <i class="fas fa-eye d-xs-block d-lg-none"></i></a>
                                        <a href="#" class="btn btn-success">Añadir al carrito <i class="fas fa-cart-plus d-xs-block d-lg-none"></i></a>
                                    </figcaption>
                                </div>
                            </figure>
                            <div class="caption text-center">
                                <div class="title"><a href="#">Template Happy</a></div>
                                <div class="price"><h5>$13.000</h5></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Buttons nav-->
                    <div class="col-12">
                        <div class="buttons-nav d-flex align-items-center">
                            <button class="button left"><i class="fas fa-angle-left"></i></button>
                            <button class="button right ml-3"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-interior secondary" id="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="mb-3">Suscríbete a nuestro boletín</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident animi similique itaque dignissimos esse, pariatur repellat placeat eligendi id ex, velit sapiente? Nobis, qui. Odio laborum repellendus animi temporibus illo!</p>
                        <form action="" class="form-inline text-center justify-content-center mt-4">
                            <input type="email" class="form-control" placeholder="Ingresa tu correo">
                            <button type="submit" class="btn btn-success">Suscribirme</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-interior primary">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Busca templates en Sofware específicos</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores sunt commodi ducimus, quaerat, illo voluptate iure iste incidunt ipsam voluptas suscipit itaque aut, doloribus porro labore quod? Obcaecati, ipsa suscipit?</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>