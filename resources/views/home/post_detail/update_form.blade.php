@extends('home.main')

@section('home_content')
<main id="main">
  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="reply-form">
          <h4>Leave a Reply</h4>
          <p>Your email address will not be published. Required fields are marked * </p>
          {{-- @dump($errors) --}}

          <form action= {{ route('update_post', $post->id) }} method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT')}}           
            <div class="row">
              <div class="col-md-6 form-group">
                <input name="post_title" type="string" class="form-control" placeholder="Your Title*" value="{{ $post->post_title }}">
              </div>
            </div>

            <div class="row">
              <div class="col form-group">
                <input name="post_content" class="form-control" placeholder="Your Content*" value="{{ $post->post_content }}"></input>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <input name="post_cate" type="string" class="form-control" placeholder="Post Category*" value="{{ $post->post_cate }}">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <input name="post_author" type="string" class="form-control" placeholder="Author*" value="{{ $post->post_author }}">
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update Post</button>
          </form>

        </div>
        @if ($errors->any())
          <div class="alert alert-danger w-25 alert_center">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        {{-- sidebar --}}
        {{-- @include('home.layouts.blog_sidebar') --}}

      </div>

    </div>
  </section><!-- End Blog Single Section -->

@endsection
