@extends('layouts.app')

{{--@section('title', '')--}}

@section('content')
    <!--Main layout-->
    <div class="container" style="padding-top: 20px;">
        <!--First row-->
        <div class="row">
            <div class="col-md-12">
                <!--Featured image -->
                <div class="view overlay hm-white-light z-depth-1-half">
                    <img src="http://mdbootstrap.com/images/proffesions/slides/socialmedia/img%20(2).jpg" class="img-fluid " alt="">
                    <div class="mask">
                    </div>
                </div>
                <br>
            </div>
        </div>

        <!--Main information-->
        <div class="row" style="padding: 20px 0;">
            <div class="col-md-12">
                <h2 class="h2-responsive">We are professionals</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis natus quaerat!&nbsp;&nbsp;&nbsp;<a href="" class="btn btn-primary btn-sm">Get it now!</a></p>

            </div>
        </div>
        <!--/.First row-->

        <!--Second row-->
        <div class="row">
            <!--First columnn-->
            <div class="col-md-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/images/regular/city/img%20(2).jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-md-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/images/regular/city/img%20(4).jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-md-4">
                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="http://mdbootstrap.com/images/regular/city/img%20(8).jpg" class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Card title</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
        <!--/.Second row-->
    </div>
    <!--/.Main layout-->
@endsection

@push('scripts')
<script>
    $(function() {
        //alert('jQuery');
    });
</script>
@endpush