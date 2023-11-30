<!DOCTYPE html>
<html lang="fr-ca" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css\tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tailwind.css">

    <title>@yield('titre')</title>
</head>
<body class="flex flex-col justify-between">

<!-- Header -->
<header>
    <div class="netflixLogo">
        <a id="logo" href="{{route('Films.index')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/799px-Netflix_2015_logo.svg.png" alt="Logo Image"></a>
    </div>
    @auth
    @if(isset($films) OR isset($personnes))
    <nav class="main-nav">
        <a href="{{route('Films.index')}}">Films</a>
        <a href="{{route('Personnes.index')}}">Afficher Personne</a>
    </nav>
    @else 
    @endif
    @endauth
    <nav class="sub-nav mx-auto my-auto justify-end ">
        <div class="flex-row flex "> 
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        
        @auth
        @if($user = Auth::user())
        <form method="post" action="{{route('logout')}}" >
            @csrf
            <button class="mx-2 my-1 h-[26px]" type="submit">deconnexion</button>
        </form>
            <a href="#">@role('admin') admin @endrole @role('normal') normal @endrole @role('enfant') enfant @endrole </a>
         @else
            <a href="{{route('login')}}">Connexion</a>
            
            @endif
        @endauth
        </div>
    </nav>
</header>
<!-- End Header -->

<!-- Main -->
    <main class="">
          @yield('contenu')
    </main>

<!-- End Main -->
<!-- LINKS -->
<section class="link">
    <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
    </div>
    <div class="sub-links">
        <ul>
            <li><a href="#">Audio and Subtitles</a></li>
            <li><a href="#">Audio Description</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Legal Notices</a></li>
            <li><a href="#">Corporate Information</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</section>
<!-- End LINKS -->
<!-- Footer -->
<footer>
    <p>&copy 1997-2018 Netflix, Inc.</p>
    <p>Carlos Avila &copy 2018</p>
</footer>
<!-- End Footer -->

    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark')
      }
  </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="{{asset('js\scripts.js')}}"></script>
</body>
</html>
