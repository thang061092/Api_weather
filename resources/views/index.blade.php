
<!DOCTYPE html>
<html>
<head>
    <title>Weather Report Widget Flat Responsive Widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Weather Report Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="{{asset('css/owlCarousel.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

    <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,

                items : 3,
                itemsDesktop : [768,3],
                itemsDesktopSmall : [414,4]

            });

        });
    </script>
    <script src="{{asset('js/skycons.js')}}"></script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
</head>
<body>
<div class="main-agileits">
    <h1>Weather Report Widget</h1>
    <div class="main-wthree-row">
        <div class="agileinfo-text">
            <div class="date">
                <script type="text/javascript">
                    let mydate=new Date()
                    let year=mydate.getYear()
                    if(year<1000)
                        year+=1900
                    let day=mydate.getDay()
                    let month=mydate.getMonth()
                    let daym=mydate.getDate()
                    if(daym<10)
                        daym="0"+daym
                    let dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
                    let montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
                    document.write(""+dayarray[day]+" <br> "+daym+"  "+montharray[month]+"  "+year+"")
                </script>
                <!-- //Date-JavaScript -->
            </div>
            <h2>{{$ces}}<span>°</span></h2>
            <h4>{{$city}}</h4>
            <h6>Rain Falling</h6>
        </div>
        <div class="w3layouts-slider">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item agile-item">
                    <canvas id="sleet" width="40" height="40"></canvas>
                    <h6>Thr</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="rain" width="40" height="40"></canvas>
                    <h6>Fri</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="partly-cloudy-day" width="40" height="40"></canvas>
                    <h6>Sat</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="cloudy" width="40" height="40"></canvas>
                    <h6>Sun</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="clear-night" width="40" height="40"></canvas>
                    <h6>Mon</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="clear-day" width="40" height="40"></canvas>
                    <h6>Tue</h6>
                </div>
                <div class="item agile-item">
                    <canvas id="partly-cloudy-night" width="40" height="40"></canvas>
                    <h6>Wed</h6>
                </div>
            </div>
            <script>
                let icons = new Skycons({"color": "#fff"}),
                    list  = [
                        "clear-night","clear-day", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;
                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);

                icons.play();
            </script>
        </div>
    </div>
</div>
<div class="copy-rights wthree">
    <p>© 2016 Weather Report Widget. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
</body>
</html>
