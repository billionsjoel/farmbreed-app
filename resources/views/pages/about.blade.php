<style>
    .about-section {
        margin-top: 6rem !important;
    }

    .about-head {
        font-weight: 200;
        font-size: 3rem !important;
        color: #757575;
        padding-top: 1rem;
    }

    .content>p {
        color: #757575;
        line-height: 3rem;
    }
</style>
@extends('layouts.app')

@section('content')
    <div class="container about-section">
        @include('../../layouts/components/nav')
        <h2 class="about-head d-flex justify-content-center">About Us</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5 content">
                    <p>
                        Hyline-FarmBreed offers the Efficiency Plus+ breed, the most efficient chick for the African market
                        for both meat and egg production. We are a modern and high-end poultry farm with a vision to
                        transform agriculture in Africa into a profitable industry. With the latest imported broiler and
                        kroiler parent stock, we are delivering high yields and profits. Currently, we are serving the East
                        African market through our hatching and supply services.
                    </p>
                    <p>
                        For professional advice and consultation services, contact Hyline-FarmBreed. Our team is ready to
                        assist you in achieving a successful and profitable poultry farming experience. Don't hesitate to
                        reach out to us today.
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('../../layouts/components/footer')
@endsection
