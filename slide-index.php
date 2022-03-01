<div class="header-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 header-category-block">
                        <ul class="header-category">
                            <?php foreach($danhsachs as $danhsach){ ?>
                                <?php if($danhsach['hienthi']==1){ ?>
                            <li class="header-category-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                </svg>
                                <a href=""><?= $danhsach['tenvi'] ?></a>
                            </li>
                            <?php } ?>
                            <?php }?>
                        </ul>
                        <div class="header-form-search">
                            <input type="text" class="form-search-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-9 header-carousel-block">
                        <div class="header-carousel">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                <?php foreach($getAllSlide as $key=>$slide){ ?>
                                    <div class="carousel-item<?= $key == 0 ? ' active' : '' ?>">
                                        <img src="/Admin/thumb/<?= $slide['photo'] ?>" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="/Admin/thumb/<?= $slide['photo'] ?>" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <?php }?>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <i class="fas fa-chevron-left icon-prev"></i>
                                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <i class="fas fa-chevron-right icon-next"></i>
                                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>