<style>
    .order-section {
        margin-top: 6rem !important;
        color: #757575;
    }

    .order-head {
        font-weight: 700;
        color: #757575;
    }

    .order-btn {
        background-color: #f80 !important;
        color: #fff !important;
        width: 100% !important;
    }

    .order-btn:hover {
        background-color: #f557c3 !important;
    }

    fieldset.bk-border {
        border: 1px groove #ddd !important;
        padding: 0 1.4em 0 1.4em !important;
        margin: 0 0 0 0 !important;
        -webkit-box-shadow: 0px 0px 0px 0px #000;
        box-shadow: 0px 0px 0px 0px #000;
    }

    .lg-border {
        font-weight: 600;
        color: #757575;
    }

    .receipt {
        border: 1px dashed #f80;
        padding: 2rem;
    }

    .r-head {
        display: flex;
    }

    .p-amount {
        display: flex;
        flex-direction: column;
    }
</style>
@extends('layouts.app')

@section('content')
    <div class="container order-section">
        @include('../../layouts/components/nav')
        <h2 class="order-head d-flex justify-content-center">Your order is complete</h2>
        <div class="container r-head">
            <i class="fa-sharp fa-solid fa-egg fa-3x mb-4 primary-color"></i> <span class="mt-md-3 ms-2">FarmBreed
                Poultry<span>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="receipt">
                    <h3>Payment Receipt</h3>
                    <div class="description">
                        <p>Hello,</p>
                        <p class="mt-4">
                            This is a receipt for your latest farmbreed payment.
                        </p>
                        <hr class="mt-4">
                        <p class="mb-4 p-amount">
                            <span> Receipt : &nbsp;&nbsp;&nbsp;01 -Feb-2023 </span>
                            <span>Amount: &nbsp;&nbsp;&nbsp;Ugx 1,000,000</span>
                        </p>
                        <p class="mt-4 p-amount">
                            <span> Farmbreed</span>
                            <span>Karwerwe gayaza road</span>
                            <span>Kampala, Uganda</span>
                        </p>
                        <hr>
                        <p>To view your current month's usage, navigate to Billing Settings page and click on "View
                            Usage
                            Details"
                        </p>
                        <p>We appreciate your business!</p>
                        <p class="p-amount">
                            <span>Happy Farming,</span>
                            <span>Team FarmBreed</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('../../layouts/components/footer')
@endsection
