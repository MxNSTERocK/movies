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
            background-image: linear-gradient(to right, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.8) 30%, rgba(15, 23, 42, 0.4) 60%, rgba(15, 23, 42, 0.2) 100%), url('https://www.wheninmanila.com/wp-content/uploads/2020/12/patay-na-si-hesus-movie-header.jpg');
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
                    Patay na si Hesus
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
                    The film was initially released in October 2016 as an entry at the QCinema International Film
                    Festival. In May 2017, an advance screening of the film was held during the launch of the
                    InterAksyon Cinema Club. Columbia Pictures Philippines became the official distributor of the film
                    in July 2017.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="bg-primary hover:bg-blue-600 text-white px-6 py-3 !rounded-button flex items-center space-x-2 whitespace-nowrap btn-book">
                        <i class="ri-ticket-2-line"></i>
                        <span>Location: Amphitheater (Room 113)</span>
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/4/4d/Patay_na_si_Hesus_film_poster.jpg"
                            alt="Patay na si Hesus" class="w-full h-full object-cover object-top" />
                    </div>
                    <div class="md:w-2/3 p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h2 class="text-3xl font-bold mb-2">Patay na si Hesus</h2>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Sci-Fi</span>
                                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Adventure</span>
                                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Drama</span>
                                    <span class="px-3 py-1 bg-slate-700 rounded-full text-xs">Action</span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700">
                                    <i class="ri-heart-line text-white"></i>
                                </button>
                                <button
                                    class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 hover:bg-slate-700">
                                    <i class="ri-share-line text-white"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h3 class="text-xl font-semibold mb-3">Synopsis</h3>
                            <p class="text-gray-300 mb-4">
                                Filled with a dynamic ensemble of quirky, off-beat characters and an unapologetic
                                screenplay possessing subtle hints of satire and over the top humor, Victor Villanueva’s
                                Patay na si Hesus proves to be one of the year’s revelations.

                                Set in Cebu, heavily written in the laid-back, homey diphthongs of the Visayan language,
                                the film follows the story of Iyay (Jaclyn Jose) together with her 3 sons (no more
                                inside jokes) – Jude (Chai Fonacier), Jay (Melde Montañez) and Hubert (Vincent Viado) on
                                their way to their father’s wake in Dumaguete.
                            </p>
                            <p class="text-gray-300">
                                The general story of the film is a juxtaposition of thin and sharp; as slim as paper
                                sheet, but can simply papercut you in a beat with its unexpected humor of black comedy
                                and bits of sociopolitical and religious satire. The humor is so awkward, but it’s just
                                so good. It makes you cringe, but for all surprisingly good reasons.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                            <div>
                                <h4 class="text-sm text-gray-400 mb-1">Director</h4>
                                <p>Victor Villanueva</p>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-400 mb-1">Release Date</h4>
                                <p>October 16, 2016</p>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-400 mb-1">Runtime</h4>
                                <p>1 hours 30 minutes</p>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h3 class="text-xl font-semibold mb-3">Cast</h3>
                            <div class="flex flex-wrap gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                                        <img src="data:image/jpeg;base64,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"
                                            alt="Timothée Chalamet" class="w-full h-full object-cover" />
                                    </div>
                                    <span class="text-sm">Jaclyn Jose</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                                        <img src="data:image/jpeg;base64,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"
                                            alt="Melde Montañez" class="w-full h-full object-cover" />
                                    </div>
                                    <span class="text-sm">Melde Montañez</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                                        <img src="data:image/jpeg;base64,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"
                                            alt="Vincent Viado" class="w-full h-full object-cover" />
                                    </div>
                                    <span class="text-sm">Vincent Viado</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                                        <img src="data:image/jpeg;base64,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"
                                            alt="Chai Fonacier" class="w-full h-full object-cover" />
                                    </div>
                                    <span class="text-sm">Chai Fonacier</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="w-16 h-16 rounded-full bg-slate-700 mb-2 overflow-hidden">
                                        <img src="data:image/jpeg;base64,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"
                                            alt="Miles Canapi" class="w-full h-full object-cover" />
                                    </div>
                                    <span class="text-sm">Miles Canapi</span>
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
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIpGh6n3FO6q3IgmThTvBWIRZHRHoyqwl90Q&s"
                        alt="Dune Scene 1"
                        class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="rounded-xl overflow-hidden h-60">
                    <img src="data:image/jpeg;base64,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"
                        alt="Dune Scene 2"
                        class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="rounded-xl overflow-hidden h-60">
                    <img src="data:image/jpeg;base64,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"
                        alt="Dune Scene 3"
                        class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-300" />
                </div>
                <div class="rounded-xl overflow-hidden h-60">
                    <img src="data:image/jpeg;base64,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"
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
                        <button
                            class="bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-r-lg whitespace-nowrap">
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