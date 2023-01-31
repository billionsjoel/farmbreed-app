<style>
    .footer-section {
        margin: 6rem 6rem 0 6rem;
        background: linear-gradient(to right, rgba(255, 223, 187, 0.5), rgba(255, 223, 187, 0.5)),
            radial-gradient(circle, rgba(255, 223, 187, 0.8), rgba(255, 223, 187, 0.5));
        height: 48vh;
        background-image: url(images/bg.svg);
    }

    .footer-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        margin-top: 3rem;
    }

    .footer-card>h4 {
        font-weight: 700;
        color: #444;
        font-size: 1.2rem;
    }

    .footer-card>ul {
        text-decoration: none;
        list-style: none;
        padding: 1.3rem 0 0 0;
        margin: 0;
    }

    .footer-card>ul>li {
        padding: 1rem 1rem 0 0;
        color: #757575;
        font-weight: 500;
    }

    .tel-ml {
        margin-left: 2.5rem;
    }

    .licence {
        text-align: center;
        margin-top: 3rem;
    }

    .licence>p {
        font-size: 1rem;
        font-weight: 300;
        line-height: 2rem;
        width: 50%;
        text-align: center;
        margin: auto;
    }

    @media (max-width:641px) {

        /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
        .footer-section {
            margin: 4rem 0 0 0;
            background: linear-gradient(to right, rgba(255, 223, 187, 0.5), rgba(255, 223, 187, 0.5)),
                radial-gradient(circle, rgba(255, 223, 187, 0.8), rgba(255, 223, 187, 0.5));
            background-image: url(images/bg.svg);
            height: 100vh;
        }

        .footer-cards {
            display: grid;
            grid-template-columns: repeat(1, 80%);
            grid-template-rows: repeat(4, 1f);
            justify-content: center;
            align-items: center;
            grid-gap: 2rem;
        }

        .footer-card {
            margin-top: 3rem;
            text-align: left;
        }

        .footer-card>ul>li:last-child {
            margin-bottom: 3rem;
        }

        .licence {
            margin-bottom: 3rem;
        }

        .licence>p {
            padding-bottom: 3rem;
        }
    }
</style>

<section class="footer-section">
    <div class="footer-container container">
        <h1 class="primary-color">HYLINE-FARMBREED: Africa's super chick</h1>
        <div class="footer-cards">
            <div class="footer-card">
                <h4>Get in touch</h4>
                <ul>
                    <li><i class="fa-sharp fa-solid fa-location-dot fa-lg primary-color me-3"></i> Kyebando Mpererwe road
                    </li>
                    <li><i class="fa-sharp fa-solid fa-phone fa-lg primary-color me-3"></i> +256(0) 750 895 982
                        <br><span class="tel-ml">+256(0) 777 342 488</span>
                    </li>
                    <li><i class="fa-sharp fa-solid fa-envelope fa-lg primary-color me-3"></i> info@farmbreed.ug</li>
                    <li><i class="fa-sharp fa-solid fa-file-pen fa-lg primary-color me-3"></i> Our Blog</li>
                </ul>
            </div>
            <div class="footer-card">
                <h4>Join FarmBreed</h4>
                <ul>
                    <li>Careers</li>
                    <li>Join as Agent</li>
                    <li>Join as partner</li>
                </ul>
            </div>
            <div class="footer-card">
                <h4>Support</h4>
                <ul>
                    <li>FAQ</li>
                    <li>Terms of Use</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div class="footer-card">
                <h4>Download App</h4>
                <ul>
                    <li>
                        <img src="{{ asset('images/playstore-img.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/appstore-img.svg') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <div class="licence">
            <h3>Licensed under</h3>
            <p class="black">National Payment Systems (NPS) • License by bank of Uganda
                Personal Data Protection Office (PDPO) under the National Information Technology Authority (NITA)
                © farmbreed 2022, All rights reserved.</p>
        </div>
    </div>
</section>
