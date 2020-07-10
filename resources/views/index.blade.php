<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>
        HomePage
    </title>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          crossorigin="anonymous">
    <link href="assets/css/toolkit-startup.css" rel="stylesheet">
    <link href="assets/css/application-startup.css" rel="stylesheet">
    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        /* …curses ios, etc… */
        @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
            body {
                width: 1px;
                min-width: 100%;
                *width: 100%;
            }

            #stage {
                height: 1px;
                overflow: auto;
                min-height: 100vh;
                -webkit-overflow-scrolling: touch;
            }
        }

    </style>
</head>
<body>
<div class="stage-shelf stage-shelf-right hidden" id="sidebar">
    <ul class="nav nav-bordered nav-stacked flex-column">
        <li class="nav-header">Examples</li>
        <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
        </li>
    </ul>
</div>

<div class="stage" id="stage">

        <div>
            <nav class="navbar navbar-padded navbar-toggleable-sm navbar-transparent bg-dark " style="padding:1.5rem;">
                <div class="container">
                    <button
                        class="navbar-toggler navbar-toggler-right hidden-md-up "
                        type="button"
                        data-target="#stage"
                        data-toggle="stage"
                        data-distance="-250">
                        <span class="navbar-toggler-icon" style="color: #000000"></span>
                    </button>

                    <a class="navbar-brand mr-auto" href="">
                        <strong style="background: #fff; padding: 12px; border-radius: 4px; color: #28669F;">Go</strong>
                    </a>

                    <div class="hidden-sm-down text-uppercase">
                        <ul class="navbar-nav">
                            <li class="nav-item px-1 ">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item px-1 ">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item px-1 ">
                                <a class="nav-link" href="#">About us</a>
                            </li>
                            <li class="nav-item px-1 ">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </nav>
        </div>


    <div class="block block-inverse block-secondary app-code-block">
        <div class="container">
            <div class="row app-align-center">
                <div class="col-md-5 push-md-7">
        <pre class="app-code">
<span>1</span> <span>goAnalytics</span> “who are the latest 3 users?”
<span>2</span>
<span>3</span>  {
<span>4</span>    "Dave": {
<span>5</span>      "fullName": "Dave Gamache",
<span>6</span>      "twitterHandle": "@dhg",
<span>7</span>    }
<span>8</span>    "Mark": {
<span>9</span>      "fullName": "Mark Otto",
<span>10</span>      "twitterHandle": "@mdo",
<span>11</span>    }
<span>12</span>    "Jacob": {
<span>13</span>      "fullName": "Jacob Thornton",
<span>14</span>      "twitterHandle": "@fat",
<span>15</span>    }
<span>16</span>  }</pre>
                </div>

                <div class="col-md-6 pull-md-5">
                    <h6 class="text-muted text-uppercase">Easy development</h6>
                    <h3>Natural language queries make mining data easy for anyone.</h3>
                    <p class="lead mb-4 text-muted">Rather than force everyone at your company to learn incredibly
                        difficult terminal commands, we allow anyone to query the data with natural language to return
                        data.</p>
                    <button class="btn btn-secondary btn-lg btn-borderless">
                        Read our docs
                    </button>
                </div>
            </div>
        </div>
    </div>




</div>

<div class="block block-inverse block-secondary app-code-block">
    <div class="container">
        <div class="row app-align-center">
            <div class="col-md-5 push-md-7">
        <pre class="app-code">
<span>1</span> <span>goAnalytics</span> “who are the latest 3 users?”
<span>2</span>
<span>3</span>  {
<span>4</span>    "Dave": {
<span>5</span>      "fullName": "Dave Gamache",
<span>6</span>      "twitterHandle": "@dhg",
<span>7</span>    }
<span>8</span>    "Mark": {
<span>9</span>      "fullName": "Mark Otto",
<span>10</span>      "twitterHandle": "@mdo",
<span>11</span>    }
<span>12</span>    "Jacob": {
<span>13</span>      "fullName": "Jacob Thornton",
<span>14</span>      "twitterHandle": "@fat",
<span>15</span>    }
<span>16</span>  }</pre>
            </div>

            <div class="col-md-6 pull-md-5">
                <h6 class="text-muted text-uppercase">Easy development</h6>
                <h3>Natural language queries make mining data easy for anyone.</h3>
                <p class="lead mb-4 text-muted">Rather than force everyone at your company to learn incredibly
                    difficult terminal commands, we allow anyone to query the data with natural language to return
                    data.</p>
                <button class="btn btn-secondary btn-lg btn-borderless">
                    Read our docs
                </button>
            </div>
        </div>
    </div>
</div>

<div class="block block-inverse app-high-praise"
     style="background-image: url(assets/img/startup-3.jpg);">
    <div class="container">
        <div class="row app-align-center py-3">
            <div class="col-sm-5 push-sm-7 py-5">
                <h6 class="text-muted text-uppercase mb-2">High Praise</h6>
                <h3 class="mb-4">“Go Analytics is amazing. Decisions that used to take weeks, now only takes minutes
                    and is available to everyone on my team.”</h3>
                <p class="mb-4 text-muted">Cindy Smith, founder of Cool Startup</p>
            </div>
        </div>
    </div>
</div>

<div class="block app-ribbon py-5">
    <div class="container text-xs-center">
        <img src="assets/img/startup-4.svg">
        <img src="assets/img/startup-5.svg">
        <img src="assets/img/startup-6.svg">
        <img src="assets/img/startup-7.svg">
        <img src="assets/img/startup-8.svg">
    </div>
</div>

<div class="block block-secondary app-block-marketing-grid">
    <div class="container text-xs-center">

        <div class="row mb-5">
            <div class="col-xs-10 offset-xs-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
                <h6 class="text-muted text-uppercase mb-2">Inside the machine</h6>
                <h3 class="mb-4">It’s not hard to see how we make your life easier every day.</h3>
            </div>
        </div>

        <div class="row app-marketing-grid">
            <div class="col-md-4 px-4 mb-5">
                <img class="mb-1" src="assets/img/startup-9.svg">
                <p><strong>24/7 support.</strong> We’re always here for you no matter what time of day.</p>
            </div>
            <div class="col-md-4 px-4 mb-5">
                <img class="mb-1" src="assets/img/startup-10.svg">
                <p><strong>E-commerce.</strong> We automatically handle all sales analytics.</p>
            </div>
            <div class="col-md-4 px-4 mb-5">
                <img class="mb-1" src="assets/img/startup-11.svg">
                <p><strong>Turnaround.</strong> Our data analysis is distributed, so it processes in seconds.</p>
            </div>
        </div>

        <div class="row app-marketing-grid">
            <div class="col-md-4 px-4 mb-5">
                <img class="mb-1" src="assets/img/startup-12.svg">
                <p><strong>Rich calculations.</strong> Limitless ways to splice and dice your data.</p>
            </div>
            <div class="col-md-4 px-4 mb-5">
                <img class="mb-1" src="assets/img/startup-13.svg">
                <p><strong>Mobile apps.</strong> iOS and Android apps available for monitoring.</p>
            </div>
            <div class="col-md-4 px-4 mb-5">
                <img class="mb-1" src="assets/img/startup-14.svg">
                <p><strong>Secure connections.</strong> Every single request is routed through HTTPS.</p>
            </div>
        </div>
    </div>
</div>

<div class="block app-price-plans">
    <div class="container text-center">

        <div class="row mb-5">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <h6 class="text-muted text-uppercase mb-2">Business Talk</h6>
                <h3>No plans. We just bump your plan whenever you need it.</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 px-4 pb-2 mb-5">
                <div class="px-2 mb-2">
                    <h6 class="text-muted text-uppercase mb-4">Personal</h6>
                    <img class="mb-4" src="assets/img/startup-15.svg">
                    <p class="pb-2">Plenty of processing power for any personal projects, big or small.</p>
                </div>

                <ul class="list-unstyled list-bordered text-xs-left my-4">
                    <li class="py-4"><strong>10k</strong> monthly requests</li>
                    <li class="py-4"><strong>9am-5pm</strong> technical supprt</li>
                    <li class="py-4"><strong>Public</strong> API access</li>
                </ul>

                <button class="btn btn-lg btn-primary btn-block">
                    Start <span class="hidden-lg-down">a personal account</span>
                </button>
            </div>

            <div class="col-md-4 px-4 pb-2 mb-5">
                <div class="px-2">
                    <h6 class="text-muted text-uppercase mb-4">Business</h6>
                    <img class="mb-4" src="assets/img/startup-16.svg">
                    <p class="pb-2">The perfect sized plan for small businesses to get started.</p>
                </div>

                <ul class="list-unstyled list-bordered text-xs-left my-4">
                    <li class="py-4"><strong>100k</strong> monthly requests</li>
                    <li class="py-4"><strong>24/7</strong> technical supprt</li>
                    <li class="py-4"><strong>Public</strong> API access</li>
                </ul>

                <button class="btn btn-lg btn-primary btn-block">
                    Start <span class="hidden-lg-down">a business account</span>
                </button>
            </div>

            <div class="col-md-4 px-4 pb-1 mb-5">
                <div class="px-2">
                    <h6 class="text-muted text-uppercase mb-4">Corporate</h6>
                    <img class="mb-4" src="assets/img/startup-17.svg">
                    <p class="pb-2">An unlimited plan that will scale infinitely to any size project.</p>
                </div>

                <ul class="list-unstyled list-bordered text-xs-left my-4">
                    <li class="py-4"><strong>Unlimited</strong> monthly requests</li>
                    <li class="py-4"><strong>24/7</strong> technical supprt</li>
                    <li class="py-4"><strong>Public &amp; Private</strong> API access</li>
                </ul>

                <button class="btn btn-lg btn-primary btn-block">
                    Start <span class="hidden-lg-down">a corporate account</span>
                </button>
            </div>
        </div>

    </div>
</div>
</div>
<div class="block block-inverse app-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">About</h6></li>
                    <li class="text-muted">
                        We’ve been working on Go Analytics for the better part of a decade and are super proud of
                        what we’ve created. If you’d like to learn more, or are interested in a job, contact us
                        anytime at <a href="mailto: themes@getbootstrap.com">themes@getbootstrap.com</a>.
                    </li>
                </ul>
            </div>
            <div class="col-md-2 offset-md-1 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">Product</h6></li>
                    <li class="text-muted">Features</li>
                    <li class="text-muted">Examples</li>
                    <li class="text-muted">Tour</li>
                    <li class="text-muted">Gallery</li>
                </ul>
            </div>
            <div class="col-md-2 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">Apis</h6></li>
                    <li class="text-muted">Rich data</li>
                    <li class="text-muted">Simple data</li>
                    <li class="text-muted">Real time</li>
                    <li class="text-muted">Social</li>
                </ul>
            </div>
            <div class="col-md-2 mb-5">
                <ul class="list-unstyled list-spaced">
                    <li class="mb-2"><h6 class="text-uppercase">Legal</h6></li>
                    <li class="text-muted">Terms</li>
                    <li class="text-muted">Legal</li>
                    <li class="text-muted">Privacy</li>
                    <li class="text-muted">License</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/toolkit.js"></script>
<script src="assets/js/application.js"></script>
<script>

</script>
</body>
</html>

