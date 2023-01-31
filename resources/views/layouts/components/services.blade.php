<style>
    .services-section {
        margin-bottom: 4rem;
    }

    h1 {
        font-weight: 900;
    }

    h2 {
        font-weight: 700;
        font-size: 3rem;
    }

    .services {
        display: flex;
        justify-content: center;
    }

    .service-card {
        background-color: #FFF5EA;
        border-radius: 10px;
        height: 33rem;
        width: 29rem;
        display: flex;
        justify-content: end;
        flex-direction: column;
        align-items: center;
    }

    .service-list>ul {
        text-decoration: none;
        list-style: none;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 33rem;
        width: 29rem;
        gap: 2rem;
    }

    li>a {
        font-weight: 600;
        font-size: 1.5rem;
        text-decoration: none;
        color: #757575;
    }

    li>a:hover {
        color: #f80;
    }

    @media (max-width:641px) {

        /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */

        .services {
            display: flex;
            flex-direction: column;

        }

        .service-card {
            margin: auto;
        }
    }
</style>


<section class="services-section">
    <h1 class="black text-center p-4">Our services</h1>
    <div class="services">
        <div class="service-card">
            <i class="fa-sharp fa-solid fa-egg fa-10x mb-4 primary-color"></i>
            <h2 class="primary-color">FarmBreed</h2>
            <p class="pb-4 primary-color">Africa's super chick</p>
        </div>
        <div class="service-list">
            <ul>
                <li>
                    <a href="">Day old chicks</a>
                </li>
                <li>
                    <a href="">freshly slaughtered broilers</a>
                </li>
                <li>
                    <a href="">Consulatations</a>
                </li>
                <li>
                    <a href="">Local and International Market</a>
                </li>
            </ul>
        </div>
    </div>
</section>
