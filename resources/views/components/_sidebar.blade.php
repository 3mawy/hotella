<button class="btn dorne-btn" id="sidebarCollapse">Search filters <i class="fas fa-search"></i></button>
<div class="explore-search-form">
            <h5 >What are you looking for?</h5>

            <!-- Tabs Content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                    <form action="{{url()->current()."?&"}}" method="get">
                        @csrf
                        <input value="{{request('dest_id')}}" type="hidden" name="dest_id" id="dest_id" />
                        <input value="{{request('search')}}" type="hidden" name="search" id="search" />
                        <input value="{{request('checkIn')}}" type="hidden" name="checkIn" id="checkIn" />
                        <input value="{{request('checkOut')}}" type="hidden" name="checkOut" id="checkOut" />
                        <input value="{{request('adults')}}" type="hidden" name="adults" id="adults" />

                        <select name="sort" class="custom-select" >
                            <option selected>Sort by</option>
                            <option value="rating">Rating</option>
                            <option value="name">Name</option>
                        </select>

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

