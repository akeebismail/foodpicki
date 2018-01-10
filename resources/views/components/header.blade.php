<!--header starts-->
<header id="header" class="header-scroll top-header headrom">
    <!-- .navbar -->
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="">
                <img class="img-rounded" src="{{asset('shop/images/food-picky-logo.png')}}" alt="">
            </a>
            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">

                    @foreach( $category as $item)
                    <li class="nav-item  dropdown">
                        <a class="nav-link {{($item->parent->count() > 0)? 'dropdown-toggle': ''}}  " data-toggle="{{($item->parent->count() > 0)? 'dropdown': ''}}"
                           href="{{route('category.name',$item->slug)}}" role="button" aria-haspopup="true"
                           aria-expanded="false">{{$item->name}}</a>
                        @if($item->parent->count() > 0)
                            <div class="dropdown-menu">
                                @foreach($item->parent as $value)
                                    <a class="dropdown-item" href="{{route('category.name',$value->slug)}}">{{$value->name}}</a>
                                @endforeach
                                <hr>
                                <a class="dropdown-item">See all</a>
                            </div>

                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.navbar -->
</header>