@extends('freaks.layout')
  @section('content')
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1>Pin Post</h1>
        </div>
      </div>

      
      <div id="wrapper">
        <div class="section">
            <div class="container">
                <div id="da-thumbs" class="row da-thumbs portfolio wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">


                    <div class="post-media pitem item-w1 item-h1">
                        <a href="/blog/blog_details" title="">
                            <img src="/abc/images/portfolio_01.jpg" alt="" class="img-responsive">
                            <div>
                                <h3>Lost Friends <strong>Ryan Lewis</strong> <small>Ryan Lewis</small> </h3>
                            </div>
                        </a>
                    </div>
                    
                    <div class="post-media pitem item-w1 item-h1 cat2">
                        <a href="single-porfolio.html" title="">
                            <img src="/abc/images/portfolio_02.jpg" alt="" class="img-responsive">
                            <div>
                                <h3>Succulents <strong>Chris Ota</strong><small>Chris Ota</small></h3>
                            </div>
                        </a>
                    </div>

                    <div class="post-media pitem item-w1 item-h1 cat1">
                        <a href="single-porfolio.html" title="">
                            <img src="/abc/images/portfolio_03.jpg" alt="" class="img-responsive">
                            <div>
                                <h3>Realistic Gold Iphone 7 <strong>Anthony Boyd</strong><small>Anthony Boyd</small></h3>
                            </div>
                        </a>
                    </div>

                    
                </div>    
            </div>
        </div>
    </div>

    </main>

@endsection

@section('title')
Pin Post
@endsection