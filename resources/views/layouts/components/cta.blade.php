<style>
    .cta-section {
        background-color: #FFF5EA;
        padding: 6rem;
    }

    .cta-container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #DCC4B6;
        padding: 2rem;
        border-radius: 10px;
    }

    .cta-content {
        text-align: center;
        width: 100%;
    }

    .cta-img {
        text-align: right;
    }

    h3 {
        font-size: 1.2rem;
    }

    .cta-content>p {
        font-size: 6rem;
        font-weight: 700;
        color: #f80;
    }

    @media (max-width:641px) {

        /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
        .cta-section {
            background-color: #FFF5EA;
            padding: -6rem 0 0 0;
            /*overflow-x: hidden;*/

        }

        .cta-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 0 0 0;
            position: relative;
            /*overflow: hidden;*/
        }

        .cta-img {
            text-align: center;
            position: absolute;
            z-index: 1000;
            width: 25rem;
            margin-top: -30rem;
            overflow: hidden;

        }

        .cta-content>h3 {
            font-size: 1.2rem;
            text-align: center;
            margin-top: 4rem;
        }

        .cta-content>p {
            font-size: 4rem;
            font-weight: 700;
            color: #f80;
        }
    }
</style>
<section class="cta-section">
    <div class="cta-container container-md">
        <div class="cta-img">
            <img src="{{ asset('images/fb-ui-ux.png') }}" alt="">
        </div>
        <div class="cta-content">
            <h3 class="black">Empowering Our Communities</h3>
            <p>To Thrive</p>
        </div>
    </div>
</section>
