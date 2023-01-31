<style>
    .join-section {
        padding: 6rem;
        margin: 6rem;
    }

    .join-container {}

    .join-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 6rem;
    }

    .join-card {
        background-color: #FFF5EA;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .join-card:hover {
        background-color: rgb(255, 255, 255);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.19), 0px 6px 6px rgba(0, 0, 0, 0.23);

    }

    .card-text {
        margin-top: 4rem;
        font-weight: 400;
        font-size: 1.2rem;
    }

    .card-btn {
        margin-top: 2rem;
        color: #f80;
        letter-spacing: 0.2rem;
        text-transform: uppercase;
    }

    .card-btn:hover {
        background-color: #f80;
        color: white;
    }

    @media (max-width:641px) {

        /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
        .join-section {
            padding: 0;
            margin: 0;
        }

        .join-cards {
            display: grid;
            grid-template-columns: repeat(1, 40vh);
            grid-template-rows: repeat(3, minmax(10rem, 1fr));
            grid-gap: 10px;
            align-items: center;
            justify-content: center;
        }

        .join-card {
            background-color: #FFF5EA;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
    }
</style>

<section class="join-section">
    <h1 class="text-center p-4 display-1 black fw-700 mb-2">Join Us</h1>
    <div class="join-container container">
        <div class="join-cards">
            <div class="join-card">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-arrow-up-right-dots fa-3x primary-color"></i>
                </div>
                <p class="card-text black">Join our team and flourish</p>
                <button class="btn card-btn btn-block btn-outline w-100" type="button">Explore careers</button>
            </div>
            <div class="join-card">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-users fa-3x primary-color"></i>
                </div>
                <p class="card-text black text-center">Become a farmbreed
                    agent and join our community</p>
                <button class="btn card-btn btn-block btn-outline w-100" type="button">Become an agent</button>
            </div>
            <div class="join-card">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-face-laugh-wink fa-3x primary-color"></i>
                </div>
                <p class="card-text black text-center">Sign as a client or user and start earning</p>
                <button class="btn card-btn btn-block btn-outline w-100" type="button">Become a partner</button>
            </div>
        </div>
    </div>
</section>
