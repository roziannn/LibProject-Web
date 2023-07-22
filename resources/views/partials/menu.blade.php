{{-- new ver. 7/20/23 --}}
{{-- <nav class="nav col-12 col-md-auto justify-content-center my-4">
    @foreach ($categories as $category)
    <li><a href="posts?category={{ $category->slug }}"
      class="me-3 fs-5 link-body-emphasis text-decoration-none">{{ $category->name }}</a>
    </li>
    @endforeach
</nav> --}}

<div class="nav-scroller bg-body shadow-sm justify-content-center my-4">
  <nav class="nav justify-content-center" aria-label="Secondary navigation">
    @foreach ($categories as $category)
    <a href="posts?category={{ $category->slug }}"
      class="nav-link">{{ $category->name }}</a>
      @endforeach
  </nav>
</div>

<style>

    .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 0.5rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}
.nav-scroller .nav-link {
    font-size: 1.2rem;
    color: rgb(110, 110, 110);
}
</style>
