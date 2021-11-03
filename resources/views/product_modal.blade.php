@extends('layouts.app')

@section('style')
<style>
    .fatooraProduct{
        line-height: 18px;
        position: relative;
    }

    .fatooraAddon{
        margin-bottom: 1px;
        font-size: 18px;
    }

    .fatooraItems{
        margin-bottom: 1px;
    }
    
    .price-div{
        min-width: 60px;
        color: #fff;
        text-align: center;
        font-size: 10px;
        padding-top: 5px;
        margin-right: 0%;

        /* Position*/
        top: 0;
        right:0;
        position: absolute;
        z-index: 30;
    }
    .fatooraProductAction{
        position: relative;
    }
    .trash-div{
        min-width: 60px;
        text-align: center;
        font-size: 20px;
        padding-top: 5px;
        margin-right: 0%;

        /* Position*/
        top: 0;
        right:0;
        position: absolute;
        z-index: 30;
        cursor: pointer;

    }

    .clickable{
        cursor: pointer;
        color: black;
        background-color: white;
        display: inline-block;
        height: 30px;
        width: 30px;
        font-size: 15px;
        border: 2px solid black;
        border-radius: 50%;
        line-height: 26px;
        transition: 0.2s all;
        text-align: center;
    }

    .clickable:hover{
        background-color: #e7e7e7;
    }

    .clickable:active{
        color: white;
        background-color: black;
    }

    
</style>
@endsection
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
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#cartModal">Cart</button>
                
                </div>
            </div>
        </div>
    </div>
</div>

<div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
    <input type="date" id="example" class="form-control">
    
    <label for="example">Try me...</label>
    <i class="fas fa-calendar input-prefix" tabindex=0></i>
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

<!-- cart modal -->
<div class="cartModal modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <div class="float-right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div> 
                    <h5>العربة</h5>
                </div>
                <div class="modal-body p-0">
                        <div id="fatoora">
                            <div id="fatooraProducts">
                                <div class="fatooraProduct d-flex bg-white my-3">
                                    <div class="fatooraProductInfo mx-3 w-100">
                                        <h5 class="fatooraProductTitle"> asdf asdfsadfdsaf </h5>
                                        <p class="fatooraAddon">asdf</p>
                                        <ul class="fatooraItems">
                                            <li class="fatooraItem">asdf</li>
                                            <li class="fatooraItem">asdf</li>
                                            <li class="fatooraItem">asdfdsas</li>
                                        </ul>
                                        <p class="fatooraAddon">asdf</p>
                                        <ul class="fatooraItems">
                                            <li class="fatooraItem">asdf</li>
                                            <li class="fatooraItem">asdf</li>
                                        </ul>
                                        <div class="fatooraProductAction w-100">
                                                <div class="text-center">
                                                    <i onclick="changeQuantity(false)" class="fa fa-minus clickable"></i>
                                                        <span id="quantity" class="quantity px-2">1</span>
                                                    <i onclick="changeQuantity(true)" class="fa fa-plus clickable"></i>
                                                </div>
                                                <div class="trash-div pt-0">
                                                    <i class="far fa-trash-alt"></i>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="fatooraProductPriceContainer price-div bg-secondary">
                                        <h6><span class="fatooraProductPrice">10</span><small style="font-size: 10px;">ريال</small></h6>
                                    </div>
                                </div>

                                <!-- ----------------------- -->

                                <div class="fatooraProduct d-flex bg-white my-3">
                                    <div class="fatooraProductInfo mx-3 w-100">
                                        <h5 class="fatooraProductTitle"> asdfsa asdfsafda</h5>
                                        <p class="fatooraAddon">asdf</p>
                                        <ul class="fatooraItems">
                                            <li class="fatooraItem">asdf</li>
                                            <li class="fatooraItem">asdf</li>
                                            <li class="fatooraItem">asdfdsas</li>
                                        </ul>
                                        <p class="fatooraAddon">asdf</p>
                                        <ul class="fatooraItems">
                                            <li class="fatooraItem">asdf</li>
                                            <li class="fatooraItem">asdf</li>
                                        </ul>
                                        <div class="fatooraProductAction w-100">
                                                <div class="text-center">
                                                    <i onclick="changeQuantity(false)" class="fa fa-minus clickable"></i>
                                                        <span id="quantity" class="quantity px-2">1</span>
                                                    <i onclick="changeQuantity(true)" class="fa fa-plus clickable"></i>
                                                </div>
                                                <div class="trash-div pt-0">
                                                    <i class="far fa-trash-alt"></i>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="fatooraProductPriceContainer price-div bg-secondary">
                                        <h6><span class="fatooraProductPrice">10</span><small style="font-size: 10px;">ريال</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
    
                        <div class="mx-3 mb-2">
                            <div class="d-flex justify-content-between">
                                <h6>المجموع</h6>
                                <h6><span id="fatooraTotal">10</span> ريال</h6>
                            </div>
                        </div>
                </div>
                <div class="modal-footer p-2">
                    <div class="row w-100 align-items-center">
                        <button onclick="openCheckout()" type="submit" class="btn btn-dark btn-block rounded">التالي</button>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Data Picker Initialization

    $(document).ready(function(){
        $('.datepicker').datepicker();
    });

</script>
    
@endsection