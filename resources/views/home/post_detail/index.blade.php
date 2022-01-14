@extends('home.main')

@section('home_content')
<main id="main">
  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src= {{ asset( "bower_components/Tempo/assets/img/blog/blog-1.jpg" )}}  alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a>{{ $post['post_title'] }} </a>
            </h2>
  
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"> {{ $post->author->name }} </a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"> {{ $post['created_at'] }} </time></a></li>
                
              </ul>
            </div>
  
            <div class="entry-content">
              <p>
                {{ $post['post_content'] }}
              </p>
            </div>

            <div class="entry-footer">
              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a> {{$post['post_cate'] }} </a></li>
              </ul>
            </div>

          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

        {{-- sidebar --}}
        {{-- @include('home.layouts.blog_sidebar') --}}

      </div>

    </div>
  </section><!-- End Blog Single Section -->

@endsection
