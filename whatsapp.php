<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsapp</title>
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>



    <a href="https://api.whatsapp.com/send?phone=94755174644&text=I'm%20interested%20in%20your%20services" class="whatsapp_float btn-whatsapp-pulse " target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>



    <!--<a href="https://wa.me/94755174644" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
-->
    <style>
        /* for desktop */
        .whatsapp_float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .whatsapp-icon {
            margin-top: 16px;
        }

        /* for mobile */
        @media screen and (max-width: 767px) {
            .whatsapp-icon {
                margin-top: 10px;
            }

            .whatsapp_float {
                width: 40px;
                height: 40px;
                bottom: 50px;
                right: 15px;
                font-size: 22px;
            }
        }

        .btn-whatsapp-pulse {
            
            animation-name: pulse;
            animation-duration: 1.5s;
            animation-timing-function: ease-out;
            animation-iteration-count: infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
            }

            80% {
                box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
            }
        }

        .btn-whatsapp-pulse-border {
            bottom: 120px;
            right: 20px;
            animation-play-state: paused;
        }

        

        @keyframes pulse-border {
            0% {
                padding: 25px;
                opacity: 0.75;
            }

            75% {
                padding: 50px;
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }
    </style>



</body>

</html>
<!--

<a href="https://api.whatsapp.com/send?phone=0123456789&text=I'm%20interested%20in%20your%20services" target="_blank">	Click to WhatsApp Chat</a> 