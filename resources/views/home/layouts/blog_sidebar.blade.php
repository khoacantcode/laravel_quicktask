<div class="col-lg-4">
  <div class="sidebar">
    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
      <ul>
        @foreach ($cate_list as $cate)
          <li><a href="#"> {{ $cate['cate_name'] }} </a></li>
        @endforeach                  
      </ul>
    </div><!-- End sidebar tags-->
  </div><!-- End sidebar -->
</div>
