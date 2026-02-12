<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('') ?>assets/img/logo.png" />

</head>

<body>
    <!-- Redirection Counter -->
    <script type="text/javascript">
        var count = 5; // Timer
        var redirect = "<?= base_url('siswa/dashboard') ?>"; // Target URL

        function countDown() {
            var timer = document.getElementById("timer"); // Timer ID
            if (count > 0) {
                count--;
                timer.innerHTML = "You will be redirected in " + count + " seconds."; // Timer Message
                setTimeout("countDown()", 1000);
            } else {
                window.location.href = redirect;
            }
        }
    </script>

    <div id="master-wrap">
        <div id="logo-box">
            <div class="animated fast fadeInUp">
                <div class="success-animation">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                    </svg>
                </div>
                <h1>Terima Kasih telah melakukan pembayaran</h1>
            </div>
            <div class="footer animated slow fadeInUp">
                <p id="timer">
                    <script type="text/javascript">
                        countDown();
                    </script>
                </p>
                <p>If your browser does not redirect you automatically <a
                        href="<?= base_url('siswa/dashboard') ?>">click here</a>.</p>
                <p class="copyright">&copy; SMK GITA KIRTTI 2024, All Right Reserved.</p>
            </div>
        </div>
        <!-- /#logo-box -->
    </div>
    <!-- /#master-wrap -->
</body>

<style>
    html {
        font-size: 13px;
        font-size: 1rem;
        line-height: 28px;
        line-height: 1.75rem;
    }

    body {
        background: #fff;
        margin: auto;
        color: #333;
    }


    /* Font family */

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        line-height: normal;
    }

    #timer {
        margin-top: 100px;
    }

    p {
        font-size: 14px;

    }

    .copyright {
        font-size: 14px;
        text-align: center;
        margin-top: 145px;
    }

    /* Animation */

    .animated {
        -webkit-animation-duration: 1.2s;
        -moz-animation-duration: 1.2s;
        -ms-animation-duration: 1.2s;
        -o-animation-duration: 1.2s;
        animation-duration: 1.2s;
        -webkit-transform: translate3d(0, 0, 0);
        -webkit-backface-visibility: hidden;
    }

    .animated.fast {
        -webkit-animation-duration: 800ms;
        -moz-animation-duration: 800ms;
        -ms-animation-duration: 800ms;
        -o-animation-duration: 800ms;
        animation-duration: 800ms;
    }

    .animated.slow {
        -webkit-animation-duration: 1.4s;
        -moz-animation-duration: 1.4s;
        -ms-animation-duration: 1.4s;
        -o-animation-duration: 1.4s;
        animation-duration: 1.4s;
    }

    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translateY(20px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
        }
    }

    @-moz-keyframes fadeInUp {
        0% {
            opacity: 0;
            -moz-transform: translateY(20px);
        }

        100% {
            opacity: 1;
            -moz-transform: translateY(0);
        }
    }

    @-o-keyframes fadeInUp {
        0% {
            opacity: 0;
            -o-transform: translateY(20px);
        }

        100% {
            opacity: 1;
            -o-transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        -moz-animation-name: fadeInUp;
        -o-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }


    /* Layout: center box */

    #logo-box {
        text-align: center;
        margin: 100px auto;
        width: 80%;
        height: 440px;
        font-size: 20px;
        border: 3px solid #999;
        box-shadow: 6px 6px 0px #333;
        padding: 30px;
    }

    h1 {
        font-size: 16px;
        margin: 0 auto;
        text-transform: uppercase;
        margin-top: 20px;
    }

    /* Desktop only */

    @media only screen and (min-width: 600px) {
        #logo-box {
            text-align: center;
            margin: 100px auto;
            width: 700px;
            height: 440px;
            font-size: 20px;
            border: 3px solid #999;
            box-shadow: 6px 6px 0px #333;
        }

        h1 {
            font-size: 25px;
        }

        .copyright {
            font-size: 16px;
            text-align: center;
        }
    }

    .checkmark {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        stroke-width: 2;
        stroke: #4bb71b;
        stroke-miterlimit: 10;
        box-shadow: inset 0px 0px 0px #4bb71b;
        animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        position: relative;
        top: 5px;
        right: 5px;
        margin: 0 auto;
    }

    .checkmark__circle {
        stroke-dasharray: 166;
        stroke-dashoffset: 166;
        stroke-width: 2;
        stroke-miterlimit: 10;
        stroke: #4bb71b;
        fill: #fff;
        animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;

    }

    .checkmark__check {
        transform-origin: 50% 50%;
        stroke-dasharray: 48;
        stroke-dashoffset: 48;
        animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes scale {

        0%,
        100% {
            transform: none;
        }

        50% {
            transform: scale3d(1.1, 1.1, 1);
        }
    }

    @keyframes fill {
        100% {
            box-shadow: inset 0px 0px 0px 30px #4bb71b;
        }
    }
</style>

</html>