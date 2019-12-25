@extends('BloodBank.app')
@section('content')
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;{{asset('/frontend/assets/img/blood-donation-qatar.jpg')}}&quot;);color:rgba(255,0,61,0.4);background-position:center;background-size:cover;background-repeat:no-repeat;background-color:rgba(255,1,16,0.32);">
            
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>We are non profitable organization and we provide only blood for emergency need by the help of you.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="{{asset('/frontend/assets/img/scenery/image5.jpg')}}"></div>
                    <div class="col-md-6">
                        <h3>Being A Donar</h3>
                        <div class="getting-started-info">
                            <p>Join our community. Save life and make peacefull happy
                                World.</p>
                        </div><a href="/registration-form" class="btn btn-outline-primary btn-lg" type="button">Join Now</a></div>
                </div>
            </div>
        </section>
    </main>
@endsection
