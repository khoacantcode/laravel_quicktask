@extends('home.main')

@section('home_content')
<main id="main">
  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
          
          <a href={{ route('post_create_form') }} class="btn-learn-more scrollto mb-3"> {{ __('messages.Add Post') }} </a> 
          
          @foreach ($post_list as $post)
            <article class="entry">
              <div class="entry-img">
                <img src= {{ asset( "bower_components/Tempo/assets/img/blog/blog-1.jpg" )}} alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('watch_post', $post->id) }}"> {{ $post['post_title'] }} </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"> {{ $post->author->name }} </a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"> {{ $post['created_at'] }} </time></a></li>
                  <li class="d-flex align-items-center"><a href="blog-single.html"> {{ __('messages.category') . $post['post_cate'] }} </a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p> {{ $post['post_content'] }} </p>
              </div>
              <div>
                <form action="{{ route('delete_post', $post->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <input class="btn-learn-more scrollto" type="submit" value="{{ __('messages.Delete') }}">
                </form>
                <form action="{{ route('update_post_form', $post->id) }}" method="GET">
                  {{ csrf_field() }}
                  {{ method_field('PUT')}}
                  <input class="btn-learn-more scrollto" type="submit" value="{{ __('messages.Update') }}">
                </form>
              </div>
              

            </article><!-- End blog entry -->
          @endforeach

        </div><!-- End blog entries list -->

        {{-- @include('home.layouts.blog_sidebar')   --}}
        <!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection
