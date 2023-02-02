<style>
    .order-section {
        margin-top: 6rem !important;
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
</style>
@extends('layouts.app')

@section('content')
    <div class="container order-section">
        @include('../../layouts/components/nav')
        <h2 class="order-head d-flex justify-content-center">Process Order</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <fieldset class="bk-border">
                        <legend class="text-center mt-3 lg-border mb-4">Booking Form</legend>
                        <form action="{{ route('order') }}" method="POST">
                            @csrf
                            <div class="form-group row mt-5">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="contact" class="col-sm-3 col-form-label">Contact</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="contact"
                                        placeholder="Enter your contact">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="noOfBirds" class="col-sm-3 col-form-label">No of Birds</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="noOfBirds"
                                        placeholder="Enter number of birds">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="bookDate" class="col-sm-3 col-form-label">Booking Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="bookDate">
                                </div>
                            </div>
                            <div class="form-group row mt-5">
                                <label for="location" class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="location"
                                        placeholder="Enter your location">
                                </div>
                            </div>
                            <div class="form-group row mt-5 mb-5">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn order-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        <fieldset>
                </div>
            </div>
        </div>
    </div>
    @include('../../layouts/components/footer')
@endsection
