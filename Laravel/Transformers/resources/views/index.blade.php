<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Feed | Transformers Community</title>
      <link href="{{ url('/css/style.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <link rel="icon" href="image/icontc.png" sizes="32x32" />
   </head>
   <body>
      <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-3 pe-3">
         <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="navbar-brand m-0 p-0" src="{{ url('/image/tc.png') }}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a id="nav-item-home" class="nav-link link-dark px-2.5 active" aria-current="page" href="https://www.transformers.community/">Home</a>
                  </li>
                  <li class="nav-item">
                     <a id="nav-item-over-ons" class="nav-link link-dark px-2.5" href="https://www.transformers.community/over-ons">Over ons</a>
                  </li>
                  <li class="nav-item">
                     <a id="nav-item-wordt-transformer" class="nav-link link-dark px-2.5" href="https://www.transformers.community/word-transformer">Wordt Transformer</a>
                  </li>
                  <li class="nav-item">
                     <a id="nav-item-feed" class="nav-link link-dark px-2.5" href="/">Feed</a>
                  </li>
                  <li class="nav-item">
                     <a id="nav-item-contact" class="nav-link link-dark px-2.5" href="https://www.transformers.community/contact">Contact</a>
                  </li>
               </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
               <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
               </form>
               @if (Route::has('login'))
               <ul class="nav">
                  <li class="nav-item"><a href="{{ route('register') }}" id="nav-item-aanmelden" class="nav-link link-dark px-2.5">Aanmelden</a></li>
                  <a href="{{ route('login') }}" id="nav-item-login" class="btn btn-primary btn-sm rounded-pill border-0 d-flex align-items-center"><span>Inloggen</span></a>
               </ul>
               @endif
            </div>
         </div>
      </nav>
      <main>
         <div class="sticky-sidebar d-flex flex-column align-items-center">
            <a href="{{ route('login') }}"><button class="btun">Inloggen</button></a>
            <p class="topics">Topics</p>
            <ul>
               <li><a class="tpa" href="https://leden.transformers.community/topics/4330952"target="_blank">Topic 1: Nieuw? Start hier!</a></li>
               <hr class="topicHr2">
               <li><a class="tpa" href="https://leden.transformers.community/topics/5174584"target="_blank">Topic 2: Challenge yourself</a></li>
               <hr class="topicHr2">
               <li><a class="tpa" href="https://leden.transformers.community/topics/4331245"target="_blank">Topic 3: Durf te vragen</a></li>
               <hr class="topicHr2">
               <li><a class="tpa" href="https://leden.transformers.community/topics/4518365"target="_blank">Topic 4: Ervaring delen</a></li>
               <hr class="topicHr2">
               <li><a class="tpa" href="https://leden.transformers.community/topics/4428585"target="_blank">Topic 5: Transformers' Stories</a></li>
               <hr class="topicHr2">
               <li><a class="tpa" href="https://leden.transformers.community/topics/4518369"target="_blank">Topic 6: Praktische tips</a></li>
               <hr class="topicHr2">
            </ul>
         </div>
         <div class="posts-wrapper">
            @foreach($posts as $post)
            <div class="post-content">
               <h2>{{$post->user_id}}</h2>
               <p>{{$post->content}}</p>
               <img src="image/arena.jpeg" alt="">
            </div>
            @endforeach
         </div>
      </main>
   </body>
</html>