<style>
    body {

        position: relative;
    }

    .container-boxes {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        background-color: #fff;
        top: 0;

        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 1052;
    }

    .boxes {
        margin: auto;
        width: 250px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .boxes .box {
        margin: 16.66667px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(130deg, #ce9ffc 0%, #7367f0 100%);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        -webkit-animation: pulse 1s linear infinite alternate;
        animation: pulse 1s linear infinite alternate;
    }

    .boxes .box:nth-child(1) {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s;
    }

    .boxes .box:nth-child(2) {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s;
    }

    .boxes .box:nth-child(3) {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    .boxes .box:nth-child(4) {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }

    .boxes .box:nth-child(5) {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .boxes .box:nth-child(6) {
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }

    .boxes .box:nth-child(7) {
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .boxes .box:nth-child(8) {
        -webkit-animation-delay: 0.7s;
        animation-delay: 0.7s;
    }

    .boxes .box:nth-child(9) {
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    @-webkit-keyframes pulse {

        from,
        40% {
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        80%,
        to {
            opacity: 1;
        }
    }

    @keyframes pulse {

        from,
        40% {
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        80%,
        to {
            opacity: 1;
        }
    }

    @media screen and (max-width: 300px) {
        .box {
            width: 30px !important;
            height: 30px !important;
        }
    }
</style>



<div class="container-boxes">
    <div class="boxes">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>

</div>