@extends('GeneralMaster')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-9" style="min-height:480px;margin-top:10px;">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/slider1.jpg" style="height:480px;width:100%;" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider2.jpg" style="height:480px;width:100%;" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider3.jpg" style="height:480px;width:100%;" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slider4.jpg" style="height:480px;width:100%;" />
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-3" style="min-height:480px;border:2px solid maroon;margin-top:10px;">
                <h2 style="text-align:center;background-color:maroon;color:white;">Notification</h2>
                <marquee direction="up">
                    <h5 style="text-align:center;">A notification is a message displayed by an operating system or program that is unrelated to user activity on the computer. For example, while browsing the Internet on a laptop, a low battery notification may notify you to plug the laptop into an outlet.</h5>
                </marquee>
                <marquee direction="up">
                    <h5 style="text-align:center;">A notification is a message displayed by an operating system or program that is unrelated to user activity on the computer. For example, while browsing the Internet on a laptop, a low battery notification may notify you to plug the laptop into an outlet.</h5>
                </marquee>
                <marquee direction="up">
                    <h5 style="text-align:center;">A notification is a message displayed by an operating system or program that is unrelated to user activity on the computer. For example, while browsing the Internet on a laptop, a low battery notification may notify you to plug the laptop into an outlet.</h5>
                </marquee>
                <marquee direction="up">
                    <h5 style="text-align:center;">A notification is a message displayed by an operating system or program that is unrelated to user activity on the computer. For example, while browsing the Internet on a laptop, a low battery notification may notify you to plug the laptop into an outlet.</h5>
                </marquee>
            </div>
        </div>
    </div>
</div>
@endsection()