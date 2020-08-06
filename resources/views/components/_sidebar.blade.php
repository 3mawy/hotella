<button class="btn dorne-btn" id="sidebarCollapse">Search filters <i class="fas fa-search"></i></button>
<div class="explore-search-form">
            <h5 >What are you looking for?</h5>

            <!-- Tabs Content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                    <form action="#" method="get">
                        <select class="custom-select" id="destinations">
                            <option selected>Sort by</option>
                            <option value="1">Price</option>
                            <option value="2">Rating</option>
                        </select>
                        <select class="custom-select" id="categories">
                            <option selected>All Categories</option>
                            <option value="1">Categories 1</option>
                            <option value="2">Categories 2</option>
                            <option value="3">Categories 3</option>
                            <option value="3">Categories 4</option>
                        </select>
                        <select class="custom-select" id="price-range">
                            <option selected>Price Range</option>
                            <option value="1">$100 - $499</option>
                            <option value="2">$500 - $999</option>
                            <option value="3">$1000 - $4999</option>
                            <option value="3">$5000+</option>
                        </select>
                        <select class="custom-select" id="proximity">
                            <option selected>Proximity</option>
                            <option value="1">Proximity 1</option>
                            <option value="2">Proximity 2</option>
                            <option value="3">Proximity 3</option>
                            <option value="3">Proximity 4</option>
                            <option value="3">Proximity 5</option>
                        </select>


                        <div class="row mt-md-5 mt-0">

                            <h5 class="col-12 " >Tags</h5>

                            <div class="col-md-12 col-sm-6 ">

                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator "></span>
                                    <span class="custom-control-description">Accepts Credit Cards</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Bike Parking</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Wireless Internet</span>
                                </label>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Reservations</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Privat Parking</span>
                                </label>
                            </div>
                            <div class="col-md-12 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Smoking Area</span>
                                </label>
                            </div>
                            <div class=" col-md-12 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Wheelchair Accesible</span>
                                </label>
                            </div>
                            <div class=" col-md-12 col-sm-6 ">
                                <label class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Coupons</span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn dorne-btn mt-50" style="width: 100%;text-align: center"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                    </form>
                </div>
            </div>
        </div>




    @section('scripts')
        <script>
        $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        });

        });
        </script>
        @endsection

