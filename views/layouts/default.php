<html>
    <head>
        <title>{% block title "" %}</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Parisienne">

        <link href="/content/css/uploadfile.css" rel="stylesheet">
        <script src="/content/js/jquery.min.js"></script>
        <script src="/content/js/jquery.uploadfile.min.js"></script>

        <style>
            * {
                font-family: 'Open Sans', sans-serif;
                border-spacing: 0px;
                margin: 0px;
            }

            body {
                background: url(http://drive.google.com/uc?export=view&id=0B322NAGxtPWrMEI3Tk5WOGtsRmc) 50% 0 no-repeat fixed;
            }

            #header {
                position: relative;
                top: 10px;
                left: 2.5%;
                width: 95%;
                height: 35px;
                background-color: rgba(0, 0, 0, 0.7);
                border-radius: 25px;
                border: 1px solid transparent;
                padding-top: 5px;

            }

            #main_content {
                position: relative;
                top: 25px;
                width: 600px;
                left: 50%;
                margin-left: -300px;
            }

            #logo {
                position: relative;
                left: 15px;
                font-size: 24px;
                font-family: 'Parisienne', serif;
                text-decoration: none;
                color: #ddd;
            }

            #title {
                position: relative;
                right: 15px;
                float: right;
                font-size: 24px;
                font-family: 'Parisienne', serif;
                text-decoration: none;
                color: #ddd;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <a id="logo" href="http://hugheswedding.net">Hughes Wedding</a>

            <span id="title">Photo Share</span>
        </div>
        <div id="main_content">
            {% block content "" %}
        </div>
    </body>
</html>