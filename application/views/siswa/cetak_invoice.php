<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Invoice2</title>

    <!-- Bootstrap cdn 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom font montseraat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <!-- Custom style invoice1.css -->
    <link rel="stylesheet" type="text/css" href="./invoice2.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section class="front">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="invoice-wrapper">
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="invoice-top-left">
                                        <h2>SMK GITA KIRTTI 1 JAKARTA</h2>
                                        <h3>NAMA</h3>
                                        <h5>KELAS, JURUSAN</h5>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="invoice-top-right">
                                        <h2>Invoice</h2>
                                        <h3>INV </h3>
                                        <h5>September 06, 2017</h5>

                                        <!-- <div class="logo-wrapper">
                                            <img src="./Acme.png" class="img-responsive pull-right logo" />
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="task-table-wrapper">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>DESCRIPTION</th>
                                                    <th>BIAYA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="desc">
                                                        <h3>Web Design</h3>
                                                    </td>
                                                    <td>
                                                        <h4>₹2500</h4>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr class="dividerr">
                                <div class="col-md-12">
                                    <div class="invoice-bottom-total">
                                        <div class="col-sm-12">
                                            <div class="total-box">
                                                <h6>TOTAL</h6>
                                                <h3>₹55,866</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12">
                                    <hr class="divider">
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-left">johndoe.com</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-center">contact@johndoe.com</h6>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-right">+91 8097678988</h6>
                                </div>
                            </div>
                            <div class="bottom-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .back {}

        .invoice-wrapper {
            margin: 20px auto;
            max-width: 700px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .invoice-top {
            background: linear-gradient(135deg, #fafafa, #eeeeee);
            padding: 10px 20px 20px;
        }

        .invoice-top-left {
            /*margin-top: 60px;*/
        }

        .invoice-top-left h2 {
            font-size: 22px;
            margin-bottom: 24px;
            font-weight: bold;
        }

        .invoice-top-right h2 {
            font-size: 22px;
            margin-bottom: 24px;
        }

        .invoice-top-left h3 {
            font-size: 15px;
            font-weight: 400;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .invoice-top-right h3 {
            font-size: 15px;
            font-weight: 400;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .invoice-top-left h5,
        .invoice-top-right h5 {
            font-size: 14px;
            font-weight: 400;
            margin-top: 0;
        }

        .invoice-top-left h4 {
            margin-top: 40px;
            font-size: 22px;
        }

        .invoice-top-left h6 {
            font-size: 14px;
            font-weight: 400;
        }

        .invoice-top-right h2,
        .invoice-top-right h3,
        .invoice-top-right h5 {
            text-align: right;
        }

        .logo-wrapper {
            overflow: auto;
        }

        .invoice-bottom {
            background-color: #ffffff;
            padding: 20px 40px;
            position: relative;
            height: 475px;
        }

        .task-table-wrapper .table>tbody>tr>td {
            padding-top: 25px;
            height: 202.5px;
        }

        .task-table-wrapper .table tbody .desc {
            width: 100%;
        }

        .desc h3 {
            margin-top: 0;
            font-size: 20px;
        }

        .desc h5 {
            font-weight: 400;
            line-height: 1.4;
            font-size: 14px;
        }

        .invoice-bottom-total {
            background-color: #ffffff;
            overflow: auto;
            float: right;
        }

        .invoice-bottom-total .tax-box,
        .invoice-bottom-total .add-box,
        .invoice-bottom-total .sub-total-box {
            display: inline-block;
            margin-right: 10px;
            padding: 10px;
        }

        .invoice-bottom-total .total-box {
            background-color: #ffffff;
            width: 150px;
            height: 65px;
        }

        .invoice-bottom-total .total-box h6 {
            margin-top: 0;
            color: #000;
            text-align: right;
        }

        .invoice-bottom-total .total-box h3 {
            margin-bottom: 0;
            color: #000;
            text-align: right;
        }

        .divider {
            margin-bottom: 5px;
            border: 1px solid #000;
        }

        .dividerr {
            border: 1px solid #000;
        }

        .bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 26px;
            background-color: #323149;
        }
    </style>

    <!-- jquery slim version 3.2.1 minified -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>

</html>