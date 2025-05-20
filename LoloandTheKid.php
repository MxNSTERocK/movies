<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie Wallpaper</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: "#3b82f6", secondary: "#10b981" },
          borderRadius: {
            none: "0px",
            sm: "4px",
            DEFAULT: "8px",
            md: "12px",
            lg: "16px",
            xl: "20px",
            "2xl": "24px",
            "3xl": "32px",
            full: "9999px",
            button: "8px",
          },
        },
      },
    };
  </script>
  <style>
    :where([class^="ri-"])::before {
      content: "\f3c2";
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: #0f172a;
      color: #f8fafc;
    }

    .movie-hero {
      background-image: linear-gradient(to right, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.8) 30%, rgba(15, 23, 42, 0.4) 60%, rgba(15, 23, 42, 0.2) 100%), url('https://m.media-amazon.com/images/M/MV5BMTVjMDI1NTItYTVkNi00N2YwLTg4OWEtOGM5ZmM2MmY5ODUwXkEyXkFqcGc@._V1_.jpg');
      background-size: cover;
      background-position: center;
    }

    .movie-card {
      background-color: rgba(30, 41, 59, 0.8);
      backdrop-filter: blur(10px);
    }

    .location-card {
      background-color: rgba(30, 41, 59, 0.8);
      backdrop-filter: blur(5px);
      transition: all 0.3s ease;
    }

    .location-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
    }

    .rating-stars i {
      color: #facc15;
    }

    .seat-available {
      background-color: #10b981;
    }

    .seat-limited {
      background-color: #f59e0b;
    }

    .seat-sold {
      background-color: #ef4444;
    }

    .btn-book {
      transition: all 0.3s ease;
    }

    .btn-book:hover {
      transform: translateY(-2px);
    }

    input:focus {
      outline: none;
    }
  </style>
</head>

<body>
  <!-- Navigation -->
  <nav class="bg-slate-900 py-4 px-6 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
      <div class="text-2xl font-['Pacifico'] text-white">Movies</div>
      <div class="hidden md:flex space-x-6">
        <a href="#" class="text-white hover:text-primary transition-colors">Home</a>
        <a href="#" class="text-white hover:text-primary transition-colors">Movies</a>
        <a href="#" class="text-white hover:text-primary transition-colors">Theaters</a>
        <a href="#" class="text-white hover:text-primary transition-colors">About</a>
        <a href="#" class="text-white hover:text-primary transition-colors">Contact</a>
      </div>
      <div class="flex items-center space-x-4">
        <div class="relative">
          <input type="text" placeholder="Search movies..."
            class="bg-slate-800 text-white px-4 py-2 rounded-full text-sm border-none w-40 md:w-64" />
          <div class="absolute right-3 top-2.5 w-5 h-5 flex items-center justify-center">
            <i class="ri-search-line text-gray-400"></i>
          </div>
        </div>
        <button class="bg-primary hover:bg-blue-600 text-white px-4 py-2 !rounded-button whitespace-nowrap">
          Sign In
        </button>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="movie-hero min-h-[70vh] flex items-center">
    <div class="container mx-auto px-6 py-20 w-full">
      <div class="max-w-3xl">
        <span class="inline-block px-3 py-1 bg-primary !rounded-button text-white text-sm font-medium mb-4">Now
          Showing</span>
        <h1 class="text-5xl md:text-7xl font-bold mb-4 text-white">
          Lolo and The Kid
        </h1>
        <div class="flex items-center space-x-4 mb-6">
          <span class="text-gray-300">2025</span>
          <span class="px-2 py-1 bg-slate-700 rounded text-xs text-white">PG-13</span>
          <span class="text-gray-300">2h 46m</span>
          <div class="rating-stars flex">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-fill"></i>
            <span class="ml-1 text-white">4.5</span>
          </div>
        </div>
        <p class="text-lg text-gray-300 mb-8 max-w-2xl">
          "Lolo and the Kid" is a 2024 Filipino drama film that tells the story of a grandfather (Lolo) and his grandson
          (Kid) who live on the streets and survive by preying on wealthy individuals. The film explores their complex
          relationship, their journey through deception, and eventually, Lolo's decision to provide Kid with a better
          life.
        </p>
        <div class="flex flex-wrap gap-4">
          <button
            class="bg-primary hover:bg-blue-600 text-white px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap btn-book">
            <i class="ri-ticket-2-line"></i>
            <span>Location: Events Room</span>
          </button>
          <button
            class="bg-transparent border border-white text-white hover:bg-white hover:text-slate-900 px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap transition-colors">
            <i class="ri-play-circle-line"></i>
            <span>Watch Trailer</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Movie Details -->
  <section class="py-16 px-6 bg-slate-900">
    <div class="container mx-auto">
      <div class="movie-card rounded-xl overflow-hidden shadow-2xl mb-16">
        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/3 relative">
            <img
              src="data:image/jpeg;base64,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"
              alt="Lolo and The Kid" class="w-full h-full object-cover object-top" />
          </div>
          <div class="md:w-2/3 p-8">
            <div class="flex justify-between items-start mb-6">
              <div>
                <h2 class="text-3xl font-bold mb-2">Lolo and The Kid</h2>
                <div class="flex flex-wrap gap-2 mb-4">
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Sci-Fi</span>
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Adventure</span>
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Drama</span>
                  <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Action</span>
                </div>
              </div>
              <div class="flex space-x-2">
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700">
                  <i class="ri-heart-line text-white"></i>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700">
                  <i class="ri-share-line text-white"></i>
                </button>
              </div>
            </div>

            <div class="mb-6">
              <h3 class="text-xl font-semibold mb-3">Synopsis</h3>
              <p class="text-gray-300 mb-4">
                Lolo and the Kid is a heartwarming Filipino film that revolves around grandfather Lolo and his grandson,
                Kid. They lived on the streets and made money by robbing people. Lolo used Kid to gain sympathy. He used
                to locate his target first—they were usually wealthy married couples without children or single women.
              </p>
              <p class="text-gray-300">
                A hustler and the child he has taken in routinely con the wealthy, but a life-changing opportunity could
                end their inseparable bond.
              </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
              <div>
                <h4 class="text-sm text-gray-400 mb-1">Director</h4>
                <p>Benedict Mique</p>
              </div>
              <div>
                <h4 class="text-sm text-gray-400 mb-1">Release Date</h4>
                <p>March 15, 2025</p>
              </div>
              <div>
                <h4 class="text-sm text-gray-400 mb-1">Runtime</h4>
                <p>2 hours 46 minutes</p>
              </div>
            </div>

            <div class="mb-8">
              <h3 class="text-xl font-semibold mb-3">Cast</h3>
              <div class="flex flex-wrap gap-4">
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                    <img
                      src="data:image/jpeg;base64,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"
                      alt="Joel Tore" class="w-full h-full object-cover" />
                  </div>
                  <span class="text-sm">Joel Tore</span>
                </div>
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                    <img
                      src="data:image/jpeg;base64,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"
                      alt="Juan Karlos Labajo" class="w-full h-full object-cover" />
                  </div>
                  <span class="text-sm">Juan Karlos Labajo</span>
                </div>
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                    <img
                      src="data:image/jpeg;base64,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"
                      alt="Iza Calzado" class="w-full h-full object-cover" />
                  </div>
                  <span class="text-sm">Iza Calzado</span>
                </div>
              </div>
            </div>

            <div class="flex flex-wrap gap-4">
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center">
                  <i class="ri-imdb-fill text-yellow-400 ri-lg"></i>
                </div>
                <span>8.9/10</span>
              </div>
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center">
                  <i class="ri-movie-fill text-red-500 ri-lg"></i>
                </div>
                <span>94%</span>
              </div>
              <div class="flex items-center space-x-2">
                <div class="w-8 h-8 flex items-center justify-center">
                  <i class="ri-user-voice-fill text-blue-400 ri-lg"></i>
                </div>
                <span>4.5/5</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 px-6 bg-slate-800">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold mb-8">Gallery</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="rounded-xl overflow-hidden h-60">
          <img src="https://media.philstar.com/photos/2024/07/10/joel-torre-euwenn-mikael_2024-07-10_17-43-50.jpg"
            alt="Dune Scene 1"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
        <div class="rounded-xl overflow-hidden h-60">
          <img
            src="data:image/jpeg;base64,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"
            alt="Dune Scene 2"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
        <div class="rounded-xl overflow-hidden h-60">
          <img
            src="data:image/jpeg;base64,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"
            alt="Dune Scene 3"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
        <div class="rounded-xl overflow-hidden h-60">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyHWHifrOf0vJ-19Uu_LhlVzrPR4DDpQLGxw&s"
            alt="Dune Scene 4"
            class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-slate-900 border-t border-slate-800 py-12 px-6">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <div class="text-2xl font-['Pacifico'] text-white mb-4">
            Movies
          </div>
          <p class="text-gray-400 mb-4">
            Your ultimate destination for the latest movies and showtimes.
            Experience cinema like never before.
          </p>
          <div class="flex space-x-4">
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-facebook-fill text-white"></i>
            </a>
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-twitter-x-fill text-white"></i>
            </a>
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-instagram-fill text-white"></i>
            </a>
            <a href="#"
              class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors">
              <i class="ri-youtube-fill text-white"></i>
            </a>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Quick Links</h3>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Movies</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Theaters</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Coming Soon</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Promotions</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Gift Cards</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Help & Support</h3>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">FAQs</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">Refund Policy</a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="text-lg font-bold mb-4">Newsletter</h3>
          <p class="text-gray-400 mb-4">
            Subscribe to our newsletter for the latest updates and offers.
          </p>
          <div class="flex mb-4">
            <input type="email" placeholder="Your email address"
              class="bg-slate-800 text-white px-4 py-2 rounded-l-lg w-full border-none" />
            <button class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-r-lg whitespace-nowrap">
              Subscribe
            </button>
          </div>
          <div class="flex items-center space-x-2">
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-visa-fill text-blue-400 ri-lg"></i>
            </div>
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-mastercard-fill text-red-400 ri-lg"></i>
            </div>
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-paypal-fill text-blue-600 ri-lg"></i>
            </div>
            <div class="w-8 h-8 flex items-center justify-center">
              <i class="ri-apple-fill text-gray-400 ri-lg"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="border-t border-slate-800 mt-8 pt-8 text-center text-gray-500">
        <p>&copy; 2025 Movies. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Toggle mobile menu
      const mobileMenuButton = document.querySelector(".mobile-menu-button");
      const mobileMenu = document.querySelector(".mobile-menu");

      if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
          mobileMenu.classList.toggle("hidden");
        });
      }
    });

    document.addEventListener("DOMContentLoaded", function () {
      // Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const targetId = this.getAttribute("href");
          if (targetId !== "#") {
            document.querySelector(targetId).scrollIntoView({
              behavior: "smooth",
            });
          }
        });
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
      // Booking buttons functionality
      const bookButtons = document.querySelectorAll(".btn-book");

      bookButtons.forEach((button) => {
        button.addEventListener("click", function () {
          alert("Booking functionality will be implemented here.");
        });
      });
    });
  </script>
</body>

</html>