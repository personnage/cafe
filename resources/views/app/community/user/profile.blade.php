@extends('layouts.application')

@section('content')

    @include('app.community.user._sidebar')
    <div class="col-sm-9 col-xs-12">

        <div class="">
            <div class="col-xs-12 std-block userInfo">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs userInfo__tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">О себе</a></li>
                    <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Отзывы <span class="badge">15</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content userInfo__content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="col-sm-12">

                            <h4>О себе</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis magna eleifend nibh blandit, quis consectetur leo tincidunt. Mauris nec justo elementum, aliquet eros non, sollicitudin turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque mollis fermentum nunc at egestas. Phasellus arcu eros, fermentum id finibus nec, euismod vel ante. Phasellus dolor neque, pellentesque ac vehicula nec, posuere vitae massa. In id rhoncus enim, mollis ullamcorper augue. Suspendisse accumsan, neque eu laoreet dapibus, augue dolor venenatis nunc, sit amet viverra arcu neque at turpis. Sed congue dictum pellentesque. Pellentesque porta maximus odio pellentesque ultrices. Ut nec nulla iaculis, tempor urna non, mollis odio. Integer nec porttitor leo. Aenean mattis nibh lectus, sit amet laoreet magna condimentum ac. Praesent eu cursus justo.</p>

                            <p>Integer blandit in orci vitae placerat. Nulla mattis viverra libero, vitae aliquam elit gravida a. Aenean semper est eget nisl volutpat tincidunt. Curabitur vitae tempus erat. Cras a nulla enim. Cras tortor enim, rhoncus at aliquet vitae, suscipit in dolor. Nam scelerisque ac dui vitae ornare. Ut dapibus vel augue a interdum. In vulputate pellentesque quam, vitae interdum mauris. Proin varius placerat eros nec pulvinar. Maecenas vehicula, nibh eu eleifend ullamcorper, tortor sem congue orci, vel convallis lorem magna at lectus. Nullam suscipit diam nunc, et tempus tortor convallis at. Vivamus id risus justo.</p>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        @include('app.community.user._reviews')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection