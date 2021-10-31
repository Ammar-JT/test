@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                </div>
                <div class="card-body">
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#productModal">Pizza</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- product modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <div class="float-right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div> 
                    <h5 id="productModalTitle">Pizza</h5>
                    
                </div>
                <div class="modal-body">
                    <div id="productModalInfo">
                        <img id="productModalImage" class="productModalImage w-100" src="image.jpg" alt="">
                        <p id="productModalDescription" class="productModalDescription py-2">
                            An authentic pasta with a mashroom and cream, topped with a Parmisan chees. This is one of the most famous Italian plate.
                        </p>
                    </div>
                    <hr>
                    <div class="productModalAddons" id="productModalAddons">
                        <div class="productModalAddon" id="productModalAddon10">
                            <h5>Size</h5>
                            <div class="productModalItems my-3">
                                <div class="productModalItem d-flex justify-content-between">
                                    <div class="productModalItemInputContainer custom-control custom-radio">
                                        <input id="small" name="paymentMethod" type="radio" class="custom-control-input productAddonItem" product-item-id="">
                                        <label class="custom-control-label" for="small">small</label>
                                    </div>
                                    <div class="productModalItemPrice text-secondary">
                                    </div>
                                </div>
                                <div class="productModalItem d-flex justify-content-between">
                                    <div class="custom-control custom-radio ">
                                        <input id="medium" name="paymentMethod" type="radio" class="custom-control-input productAddonItem" product-item-id="">
                                        <label class="custom-control-label" for="medium">medium</label>
                                    </div>
                                    <div class="text-secondary">
                                        +10 Riyals
                                    </div>
                                </div>
                                <div class="productModalItem d-flex justify-content-between">
                                    <div class="custom-control custom-radio ">
                                        <input id="large" name="paymentMethod" type="radio" class="custom-control-input productAddonItem" product-item-id="">
                                        <label class="custom-control-label" for="large">large</label>
                                    </div>
                                    <div class="text-secondary">
                                        +20 Riyals
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="productModalAddon" id="productModalAddon20">
                            <h5>Components</h5>
                            <div class="productModalItems my-3">
                                <div class="productModalItem d-flex justify-content-between">
                                    <div class="custom-control custom-checkbox">
                                        <input id="pepperoni" type="checkbox" class="custom-control-input productAddonItem" product-item-id="">
                                        <label class="custom-control-label" for="pepperoni">pepperoni</label>
                                    </div>
                                    <div class="text-secondary">
                                    </div>
                                </div>
                                <div class="productModalItem d-flex justify-content-between">
                                    <div class="custom-control custom-checkbox">
                                        <input id="onion" type="checkbox" class="custom-control-input productAddonItem" product-item-id="">
                                        <label class="custom-control-label" for="onion">onion</label>
                                    </div>
                                    <div class="text-secondary">
                                    </div>
                                </div>
                                <div class="productModalItem d-flex justify-content-between">
                                    <div class="custom-control custom-checkbox">
                                        <input id="olive" type="checkbox" class="custom-control-input productAddonItem" product-item-id="">
                                        <label class="custom-control-label" for="olive">olive</label>
                                    </div>
                                    <div class="text-secondary">
                                        +1 Riyals
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
        </div>
    </div>
</div>
@endsection
