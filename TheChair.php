<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Wallpaper</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    />
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
      :where([class^="ri-"])::before { content: "\f3c2"; }
      body {
          font-family: 'Inter', sans-serif;
          background-color: #0f172a;
          color: #f8fafc;
      }
      .movie-hero {
          background-image: linear-gradient(to right, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.8) 30%, rgba(15, 23, 42, 0.4) 60%, rgba(15, 23, 42, 0.2) 100%), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUchxs2Fjq8kwZ7-JrKNgMl3pXLfPHWKDOwnvJ1AfcVWko0K2wHDPoqFc2hy8zUY2AjxE&usqp=CAU');
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
          <a href="#" class="text-white hover:text-primary transition-colors"
            >Home</a
          >
          <a href="#" class="text-white hover:text-primary transition-colors"
            >Movies</a
          >
          <a href="#" class="text-white hover:text-primary transition-colors"
            >Theaters</a
          >
          <a href="#" class="text-white hover:text-primary transition-colors"
            >About</a
          >
          <a href="#" class="text-white hover:text-primary transition-colors"
            >Contact</a
          >
        </div>
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input
              type="text"
              placeholder="Search movies..."
              class="bg-slate-800 text-white px-4 py-2 rounded-full text-sm border-none w-40 md:w-64"
            />
            <div
              class="absolute right-3 top-2.5 w-5 h-5 flex items-center justify-center"
            >
              <i class="ri-search-line text-gray-400"></i>
            </div>
          </div>
          <button
            class="bg-primary hover:bg-blue-600 text-white px-4 py-2 !rounded-button whitespace-nowrap"
          >
            Sign In
          </button>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="movie-hero min-h-[70vh] flex items-center">
      <div class="container mx-auto px-6 py-20 w-full">
        <div class="max-w-3xl">
          <span
            class="inline-block px-3 py-1 bg-primary !rounded-button text-white text-sm font-medium mb-4"
            >Now Showing</span
          >
          <h1 class="text-5xl md:text-7xl font-bold mb-4 text-white">
            Dune: Part Two
          </h1>
          <div class="flex items-center space-x-4 mb-6">
            <span class="text-gray-300">2025</span>
            <span class="px-2 py-1 bg-slate-700 rounded text-xs text-white"
              >PG-13</span
            >
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
At a major university, the first woman of color to become chair tries to meet the dizzying demands and high expectations of a failing English department.
          </p>
          <div class="flex flex-wrap gap-4">
            <button
              class="bg-primary hover:bg-blue-600 text-white px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap btn-book"
            >
              <i class="ri-ticket-2-line"></i>
              <span>Location: PE Room</span>
            </button>
            <button
              class="bg-transparent border border-white text-white hover:bg-white hover:text-slate-900 px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap transition-colors"
            >
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
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaymd5Ni6ZMKDNi__yPMcLqv2JBPe3tsfE7fO6NFkNzpm5_rK4BnkokhuISP8lzDpvZdg&usqp=CAU"
                alt="The Chair"
                class="w-full h-full object-cover object-top"
              />
            </div>
            <div class="md:w-2/3 p-8">
              <div class="flex justify-between items-start mb-6">
                <div>
                  <h2 class="text-3xl font-bold mb-2">The Chair</h2>
                  <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs"
                      >Sci-Fi</span
                    >
                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs"
                      >Adventure</span
                    >
                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs"
                      >Drama</span
                    >
                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs"
                      >Action</span
                    >
                  </div>
                </div>
                <div class="flex space-x-2">
                  <button
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700"
                  >
                    <i class="ri-heart-line text-white"></i>
                  </button>
                  <button
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700"
                  >
                    <i class="ri-share-line text-white"></i>
                  </button>
                </div>
              </div>

              <div class="mb-6">
                <h3 class="text-xl font-semibold mb-3">Synopsis</h3>
                <p class="text-gray-300 mb-4">
Dr. Ji-Yoon Kim as she navigates her new role as the Chair of the English department at prestigious Pembroke University. Ji-Yoon is faced with a unique set of challenges as the first woman to chair the department, and as one of the few staff members of color at the university.
                </p>
                <p class="text-gray-300">
The Chair was filmed on location in Pittsburgh and the surrounding area. To create Pembroke University's campus, the show alternated between Washington & Jefferson College and Chatham University's Shadyside campus.
                </p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div>
                  <h4 class="text-sm text-gray-400 mb-1">Director</h4>
                  <p>Denis Villeneuve</p>
                </div>
                <div>
                  <h4 class="text-sm text-gray-400 mb-1">Release Date</h4>
                  <p>August 20, 2021</p>
                </div>
                <div>
                  <h4 class="text-sm text-gray-400 mb-1">Runtime</h4>
                  <p>1 hours 46 minutes</p>
                </div>
              </div>

              <div class="mb-8">
                <h3 class="text-xl font-semibold mb-3">Cast</h3>
                <div class="flex flex-wrap gap-4">
                  <div class="flex flex-col items-center">
                    <div
                      class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden"
                    >
                      <img
                        src="data:image/jpeg;base64,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"
                        alt="Sandra Oh"
                        class="w-full h-full object-cover"
                      />
                    </div>
                    <span class="text-sm">Sandra Oh</span>
                  </div>
                  <div class="flex flex-col items-center">
                    <div
                      class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden"
                    >
                      <img
                        src="data:image/jpeg;base64,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"
                        alt="Everly Carganilla"
                        class="w-full h-full object-cover"
                      />
                    </div>
                    <span class="text-sm">Everly Carganilla</span>
                  </div>
                  <div class="flex flex-col items-center">
                    <div
                      class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden"
                    >
                      <img
                        src="data:image/jpeg;base64,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"
                        alt="Jay Duplass"
                        class="w-full h-full object-cover"
                      />
                    </div>
                    <span class="text-sm">Jay Duplass</span>
                  </div>
                  <div class="flex flex-col items-center">
                    <div
                      class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden"
                    >
                      <img
                        src="data:image/jpeg;base64,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"
                        alt="Nana Mensah"
                        class="w-full h-full object-cover"
                      />
                    </div>
                    <span class="text-sm">Nana Mensah</span>
                  </div>
                  <div class="flex flex-col items-center">
                    <div
                      class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden"
                    >
                      <img
                        src="data:image/jpeg;base64,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"
                        alt="Josh Brolin"
                        class="w-full h-full object-cover"
                      />
                    </div>
                    <span class="text-sm">Ella Rubin</span>
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
            <img
              src="data:image/jpeg;base64,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"
              alt="Dune Scene 1"
              class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300"
            />
          </div>
          <div class="rounded-xl overflow-hidden h-60">
            <img
              src="data:image/jpeg;base64,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"
              alt="Dune Scene 2"
              class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300"
            />
          </div>
          <div class="rounded-xl overflow-hidden h-60">
            <img
              src="data:image/jpeg;base64,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"
              alt="Dune Scene 3"
              class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300"
            />
          </div>
          <div class="rounded-xl overflow-hidden h-60">
            <img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB3BoAtvZ7pz6LMdpbAModSvZI75H9tuO3JQ&s"
              alt="Dune Scene 4"
              class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300"
            />
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
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors"
              >
                <i class="ri-facebook-fill text-white"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors"
              >
                <i class="ri-twitter-x-fill text-white"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors"
              >
                <i class="ri-instagram-fill text-white"></i>
              </a>
              <a
                href="#"
                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-primary transition-colors"
              >
                <i class="ri-youtube-fill text-white"></i>
              </a>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-bold mb-4">Quick Links</h3>
            <ul class="space-y-2">
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Movies</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Theaters</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Coming Soon</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Promotions</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Gift Cards</a
                >
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-bold mb-4">Help & Support</h3>
            <ul class="space-y-2">
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >FAQs</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Contact Us</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Terms of Service</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Privacy Policy</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-gray-400 hover:text-white transition-colors"
                  >Refund Policy</a
                >
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-bold mb-4">Newsletter</h3>
            <p class="text-gray-400 mb-4">
              Subscribe to our newsletter for the latest updates and offers.
            </p>
            <div class="flex mb-4">
              <input
                type="email"
                placeholder="Your email address"
                class="bg-slate-800 text-white px-4 py-2 rounded-l-lg w-full border-none"
              />
              <button
                class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-r-lg whitespace-nowrap"
              >
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
        <div
          class="border-t border-slate-800 mt-8 pt-8 text-center text-gray-500"
        >
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
