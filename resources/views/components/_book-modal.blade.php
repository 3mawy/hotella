<div class="modal fade bd-example-modal-lg" id="bookRoom_{{$room->id}}" tabindex="-1" role="dialog" aria-labelledby="bookRoom" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content mt-5">
            <div class="modal-body">
                <div class="container">
                    <div class="py-5 text-center">


                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <h4 class="mb-3">Booking info</h4>

                            <form class="needs-validation" method="post" action="{{ route('bookings.store') }}">
                                @csrf
                                <input value="{{$room->hotel->id}}" type="hidden" name="hotel_id" id="hotel_id" />
                                <input value="{{$room->id}}" type="hidden" name="room_id" id="room_id" />
                                <input value="{{ Auth::user()->id }}" type="hidden" name="user_id" id="user_id" />
                                <input value="{{session('reservation')?session('reservation')['check_in']:null}}" type="hidden" name="date_from" id="date_from" />
                                <input value="{{session('reservation')?session('reservation')['check_out']:null}}" type="hidden" name="date_to" id="date_to" />
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First name</label>
                                        <input name="first_name" type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name</label>
                                        <input name="last_name" type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                <label for="email">Email <span class="text-muted"></span></label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                                    <div class="col-md-6 mb-3">
                                <label for="address">Address <span class="text-muted"></span></label>
                                <input name="address" type="text" class="form-control" id="address" placeholder="Address">
                                <div class="invalid-feedback">
                                    Please enter a valid address .
                                </div>
                            </div>
                                </div>
                                <label for="address">cost <span class="text-muted"></span></label>
                                <input value="{{$room->price}}" type="text" name="price" id="price" readonly/>
                                <p>$</p>

                                {{--
                                                                <h4 class="mb-3">Payment</h4>

                                <div class="d-block my-3">
                                     <div class="custom-control custom-radio">
                                         <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                         <label class="custom-control-label" for="credit">Credit card</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                         <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                         <label class="custom-control-label" for="debit">Debit card</label>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-6 mb-3">
                                         <label for="cc-name">Name on card</label>
                                         <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                         <small class="text-muted">Full name as displayed on card</small>
                                         <div class="invalid-feedback">
                                             Name on card is required
                                         </div>
                                     </div>
                                     <div class="col-md-6 mb-3">
                                         <label for="cc-number">Credit card number</label>
                                         <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                         <div class="invalid-feedback">
                                             Credit card number is required
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-3 mb-3">
                                         <label for="cc-expiration">Expiration</label>
                                         <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                         <div class="invalid-feedback">
                                             Expiration date required
                                         </div>
                                     </div>
                                     <div class="col-md-3 mb-3">
                                         <label for="cc-expiration">CVV</label>
                                         <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                         <div class="invalid-feedback">
                                             Security code required
                                         </div>
                                     </div>
                                 </div>
                                 <hr class="mb-4">--}}
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Book now</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</div>
