@extends('layout.firststylelayout')
@section('main_content')

  <div id="section1" class="container bg-dark text-white text-center" style="padding:100px;">
    <h1>Welcome to K-Market Website</h1>
    <br>
    <p class= "alert alert-dark">This place where you can knows everything about store and their owner with aesthetic standard visual design!</p>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <h2>About us</h2>
        <h5>Photo of our Company:</h5>
        <img src="/img/aboutus.jpg" width="300px" height="350px">
        <p>Picture of our first meeting in Univesity of California Los Angeles.</p>

        <h2 class="mt-4">K-Market Access</h2>
        <p>You can access our website with this link</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item btn btn-dark">
            <a class="nav-link {{ $store_view ?? '' }}"   href="/storelist">Store List</a>
          </li>
          <br>
          <li class="nav-item btn btn-dark">
            <a class="nav-link {{ $owner_view ?? '' }}"  href="/ownerlist">Owner</a>
          </li>
          <br>
          <li class="nav-item btn btn-dark">
            <a class="nav-link {{ $contact_view ?? '' }}"  href="/contact">Contact</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>

      <div class="col-sm-8">
        <h2>Achievement</h2>
        <h5>Fastest time to reach one million users on Market Place, Dec 7, 2020</h5>
        <img src="/img/WallpaperMoney.png" width="750px" height="300px">
        <p>One of our best admin!</p>
        <p>Kevin Watson surpassed Sir David Attenborough's record for the fastest time to reach one million followers on Instagram, amassing the huge following in just four hours and one minute back in Desember. </p>
  
        <h2 class="mt-5">Achievement</h2>
        <h5>Most viewed video on YouTube, Nov 2, 2020</h5>
        <img src="/img/easy.jpg" width="750px" height="300px">
        <p>What a pleasure</p>
        <p>K-Market’s "How to be a good reseller in market place" YouTube video reached a historic 7,042,967,886 views on 2 November 2020. </p>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title">K-Market's Story</h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <p class="colorp">K-Market is an online marketplace and clothing reseller, primarily of sneakers. 
        Since November 2020, it has also opened up to electronic products such as game consoles, smartphones, computer hardware and our newest feature is food. 
        The Indonesia-based company was founded by Kevin William by himself in 2015–2016.</p>
    </div>
  </div>
  
  <div class="container-fluid mt-3">
    <h3>K-Market Short Story</h3>
    <p>Short story about how we can build some eCommerce like K-Market</p>
    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
      Open Story
    </button>
  </div>

@endsection