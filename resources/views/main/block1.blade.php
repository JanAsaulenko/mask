<section class="body" >
  <div class="link">
    <a href="#section1"><img src={{asset('images/section1/link.png')}}></a>
  </div>
  @include ('.main.Sections.section1')
  <div class="link">
    <a href="#section2"><img src={{asset('images/section1/link.png')}}></a>
  </div>
  @include('main.Sections.section2')
  <div class="link link3">
  <a style="position: relative; top:-33px" href="#section3"><img src={{asset('images/section1/link.png')}}></a>
  </div>
  @include('main.Sections.section3')
</section>