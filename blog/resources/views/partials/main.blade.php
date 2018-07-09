<div class="container">

  <div class="row">

    <div class="col-md-8 blog-main">

      @foreach ($posts as $post)

        @include('posts.post')

      @endforeach

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

      @include('partial.sidebar')

  </div><!-- /.row -->

</div><!-- /.container -->





