<div id="header_nav" class="header-nav">
    <nav class="navbar">
        <div class="container">
            <div class="row block-navbar">
                <div class="col-md-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><span class="fa fa-home"></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        @foreach($categories as $category)
                            <li><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</div>