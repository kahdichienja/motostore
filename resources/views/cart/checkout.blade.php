@extends('layouts.master') @section('title') Motor Shop Checkout @endsection
@section('content') @if(Session::has('cart'))
@if(Session::has('cart-error'))
    <div class="alert alert-danger">
        <p>{{error}}</p>
    </div>
@endif
<div class="privacy py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>P</span>ayment
        </h3>
        <!-- //tittle heading -->
        <div class="checkout-right">
            <!--Horizontal Tab-->
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>Cash on delivery (COD)</li>
                    <li>Credit/Debit Card</li>
                    <li>M-pesa</li>
                    <li>Paypal A/C</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <div>
                        <div class="vertical_post check_box_agile">
                            <h5>COD</h5>
                            <form
                                action="{{ route('storeCart') }}"
                                method="post"
                                class="creditly-card-form agileinfo_form"
                            >
                                <div
                                    class="creditly-wrapper wthree, w3_agileits_wrapper"
                                >
                                {{ csrf_field() }}
                                    <div class="credit-card-wrapper">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label class="control-label"
                                                    >Name</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="name"
                                                    placeholder="John Smith..."
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label class="control-label"
                                                    >Phone number</label
                                                >
                                                <input
                                                    class="form-control"
                                                    type="text"
                                                    name="phone_number"
                                                    placeholder="0712345678"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label class="control-label"
                                                    >Describe Your Location Address</label
                                                >
                                                <textarea
                                                    class="form-control"
                                                    type="text"
                                                    name="address"
                                                    placeholder="Address"
                                                ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label class="control-label"
                                                    >Payment method</label
                                                >
                                                <select name="payment_method" class="form-control" id="">
                                                    <option value="COD">Cash On Delivery</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="btn btn-success mt-3" type="submit">Make a payment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <form
                            action=""
                            method="post"
                            class="creditly-card-form agileinfo_form"
                        >
                            <div
                                class="creditly-wrapper wthree, w3_agileits_wrapper"
                            >
                                <div class="credit-card-wrapper">
                                    <div class="first-row form-group">
                                        <h4>Coming Soon</h4>
                                        <!-- <div class="controls">
												<label class="control-label">Name on Card</label>
												<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
											</div> -->
                                        <!-- <div class="w3_agileits_card_number_grids my-3">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Card Number</label>
														<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
														    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right mt-2">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
													</div>
												</div>
												<div class="clear"> </div>
											</div> -->
                                        <!-- <div class="controls">
												<label class="control-label">Expiration Date</label>
												<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
											</div> -->
                                    </div>
                                    <!-- <button class="submit mt-3">
											<span>Make a payment </span>
										</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="vertical_post">
                            <form action="" method="post">
                                <h5>
                                    Enter M-pesa Tansaction Id/Code eg.
                                    NBETYYU&....
                                </h5>
                                <!-- <div class="section_room_pay">
										<input type="text" name="" class="form-control" id="" placeholder="Transaction Id">
									</div>
									<input type="submit" value="PAY NOW"> -->
                            </form>
                        </div>
                    </div>
                    <div>
                        <div id="tab4" class="tab-grid" style="display: block;">
                            <div class="row">
                                <div class="col-md-6 pay-forms">
                                    <img
                                        class="pp-img"
                                        src="{{
                                            asset(
                                                'custome/img/payment/paypal.png'
                                            )
                                        }}"
                                        alt="Image Alternative text"
                                        title="PayPal"
                                    />
                                    <p>
                                        Important: You will be redirected to
                                        PayPal's website to securely complete
                                        your payment.
                                    </p>
                                    <a class="btn btn-primary"
                                        >Checkout via Paypal</a
                                    >
                                </div>
                                <div class="col-md-6 number-paymk">
                                    <!-- <form action="#" method="post" class="creditly-card-form-2 shopf-sear-headinfo_form">
											<section class="creditly-wrapper payf_wrapper">
												<div class="credit-card-wrapper">
													<div class="first-row form-group">
														<div class="controls">
															<label class="control-label">Card Holder </label>
															<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
														</div>
														<div class="paymntf_card_number_grids my-2">
															<div class="fpay_card_number_grid_left">
																<div class="controls">
																	<label class="control-label">Card Number</label>
																	<input class="number credit-card-number-2 form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
																	    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
																</div>
															</div>
															<div class="fpay_card_number_grid_right mt-2">
																<div class="controls">
																	<label class="control-label">CVV</label>
																	<input class="security-code-2 form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••">
																</div>
															</div>
															<div class="clear"> </div>
														</div>
														<div class="controls">
															<label class="control-label">Valid Thru</label>
															<input class="expiration-month-and-year-2 form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
														</div>
													</div>
													<input class="submit" type="submit" value="Proceed Payment">
												</div>
											</section>
										</form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Plug-in Initialisation-->
        </div>
    </div>
</div>
<!-- //payment page -->

@endif @endsection
