<style>
    .hero-section {
        background: linear-gradient(to right, rgba(255, 223, 187, 0.5), rgba(255, 223, 187, 0.5)),
            radial-gradient(circle, rgba(255, 223, 187, 0.8), rgba(255, 223, 187, 0.5));
        height: 68vh;
        background-image: url(images/bg.svg);
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
        backdrop-blur: 100px;
        -webkit-backdrop-blur: 100px;
        clip-path: polygon(50% 0%, 100% 0, 100% 90%, 67% 79%, 32% 90%, 0 80%, 0 0);
        border: 0px solid transparent;

    }

    .hero-title h1 {
        font-size: 50px;
        font-weight: 700;
        color: #757575;
    }

    p {
        font-weight: 100;
        font-size: 1.5rem;
    }

    .hero {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-evenly;
        flex-wrap: wrap;
        height: 75vh;
    }

    .hero-title {
        flex: 1;
        align-items: center;
        text-align: center;
    }

    .t-sub {
        font-weight: 100;
        font-size: 38px;
    }

    .italics {
        font-style: italic;

    }

    .hero-image {
        flex: 1;
        align-item: center;
        text-align: center;
    }

    img {
        height: 70%;
        width: 60%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.19), 0px 6px 6px rgba(0, 0, 0, 0.23);
        backdrop-blur: 90px;
        -webkit-backdrop-blur: 90px;
    }

    .hero-cta {
        border-radius: 5px;
        padding: 0.6rem;
        width: 10rem;
        margin-top: 2rem;
        font-weight: 200;
    }

    .hero-cta:hover {
        background-color: #f557c3;
    }

    @media (max-width:641px) {

        /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
        .hero-section {
            height: 98vh;
        }

        .hero {
            display: grid;
            grid-template-columns: repeat(1, 50vh);
            grid-template-rows: repeat(2, 1fr);
            gap: 2rem;
        }
    }
</style>
<section class="hero-section">
    <main class="container">
        <div class="hero">
            <div class="hero-title">
                <h1>Hyline-FarmBreed</h1>
                <h3 class="t-sub black">Efficiency <span class="italics"> plus+</span></h3>
                <p class="pt-4 black">Africa's number one chick now available.</p>
                <div class="btn bg-primary-color text-white hero-cta">Order Today Now!</div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/dayold.jpg') }}" class="img img-fluid" alt="">
            </div>
        </div>
    </main>
</section>
