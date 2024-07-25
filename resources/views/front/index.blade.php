@extends('components.main')
@section('content')
<!-- Carousel Start -->
<div class="container mx-auto mt-2 px-4 pt-10">
    <div class="slider relative overflow-hidden">
        <div class="slides flex transition transform 0.5s ease-in-out">
            <div class="slide w-100 box-border">
                <div class="flex">
                    <img src="{{asset('assets/img/SLIDE1.jpg')}}" class="w-1/2" alt="Slide 2">
                    <img src="{{asset('assets/img/SLIDE2.png')}}" class="w-1/2" alt="Slide 2">
                    </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE2.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE3.png')}}" class="w-1/2" alt="Slide 2">
                </div>
               
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE3.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE4.png')}}" class="w-1/2" alt="Slide 2">
                </div>
               
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE4.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE5.png')}}" class="w-1/2" alt="Slide 2">
                </div>
               
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE5.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE6.png')}}" class="w-1/2" alt="Slide 2">
                </div>
               
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE7.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE8.png')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE8.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE9.png')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE9.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE10.png')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE10.png')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE11.jpeg')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE11.jpeg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE12.jpeg')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE12.jpeg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE13.jpeg')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE13.jpeg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE14.jpeg')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide">
                <div class="flex">
                    <img src="{{asset('assets/img/SLIDE14.jpeg')}}" class="w-1/2" alt="Slide 2">
                    <img src="{{asset('assets/img/SLIDE15.jpeg')}}" class="w-1/2" alt="Slide 2">
                    </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE15.jpeg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE16.jpeg')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE16.jpeg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE17.jpg')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE17.jpg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE18.jpg')}}" class="w-1/2" alt="Slide 2">
                </div>
               
            </div>
            <div class="slide w-full">
                <div class="flex">
                <img src="{{asset('assets/img/SLIDE18.jpg')}}" class="w-1/2" alt="Slide 2">
                <img src="{{asset('assets/img/SLIDE19.png')}}" class="w-1/2" alt="Slide 2">
                </div>
                
            </div>
        </div>
        <div class="prev absolute top-[50%] transform: translateY(-50%) z-10 cursor-pointer" onclick="prevSlide()">&#10094;</div>
        <div class="next" onclick="nextSlide()">&#10095;</div>
    </div>
</div>
<!-- Carousel End -->
{{-- buton --}}
<div class="flex justify-center m-4">
    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy Now</button>
</div>

{{-- ABOUT US --}}
<div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-8 lg:mx-8 lg:p-12 p-4">
    <div class="content">
        <h1 class="text-2xl text-green-800 font-bold mb-4">About Us</h1>
        <p class="font-light text-xl">Welcome to Magical Brands, where beauty meets magic! Our revolutionary product, Magical Hair Colour Shampu, transforms your hair care routine. With a unique blend of nourishing shampoo and vibrant hair colour, our shampu delivers salon-worthy results in the comfort of your home. Discover our gentle yet effective formula that leaves your locks healthy and lustrous. Choose from a wide range of shades to express your individuality. Our commitment to quality and safety means you can trust our tested and chemical-free product. Unlock the power of self-expression and let your hair become a canvas for your dreams. Experience the magic at magicalbrands.info.</p>
    </div>
    <div class="img ">
        <img src="{{asset('assets/img/about.jpg')}}" alt="" class="object-cover rounded-lg">
    </div>
</div>
{{-- brand --}}
<div>
    <img src="{{asset('assets/img/magical.png')}}" alt="" class="w-full">
</div>
{{-- buton --}}
<div class="flex justify-center m-4">
    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy Now</button>
</div>

{{-- heading --}}
<h1 class="text-center font-bold text-green-800 text-3xl">Magical Hair Colour Shampoo</h1>

<div class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
        <div class="relative m-4 shadow-xl shadow-gray-500 rounded-xl">
            <img src="{{asset('assets/img/sampoo1.png')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 1">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/sampoo2.jpg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 2">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/sampoo3.png')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 3">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/sampoo4.png')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 4">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/sampoo5.png')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 5">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/sampoo6.png')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 6">
        </div>
    </div>
</div>

{{-- heading --}}
<h1 class="text-center font-bold text-green-800 text-3xl">Magical Hair & Beard Serum</h1>

<div class="container mx-auto px-4 py-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4">
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/serum1.jpeg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 1">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/serum2.jpeg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 2">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/serum3.jpeg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 3">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/serum4.jpeg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 4">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/serum5.jpeg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 5">
        </div>
        <div class="relative m-4 shadow-xl rounded-xl shadow-gray-500">
            <img src="{{asset('assets/img/serum6.jpeg')}}" class="w-full h-full object-cover rounded-2xl" alt="Image 6">
        </div>
    </div>
</div>



{{-- video --}}

{{-- heading --}}
<h1 class="text-center font-bold text-green-800 text-3xl">Magical Product Videos</h1>
<div class="container mx-auto px-4 py-10">
    <div class="relative w-full" style="padding-top: 56.25%;">
        <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/watch/?v=215493971368436" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
{{-- buton --}}
<div class="flex justify-center m-4">
    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy Now</button>
</div>

{{-- 2nd video --}}

<div class="container mx-auto px-4 py-10">
    <div class="relative w-full" style="padding-top: 56.25%;">
        <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmagicalbrand.in%2Fvideos%2F224599287180713%2F%3Fref%3Dembed_video&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>
{{-- buton --}}
<div class="flex justify-center m-4">
    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-4 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-xl">Buy Now</button>
</div>

{{-- feature slider --}}
<!-- Carousel Container -->
<!-- Carousel Container -->
<div class="carousel-container relative mx-4 lg:px-12">
  <!-- Carousel -->
  <div class="carousel overflow-hidden w-full relative">
    <div class="carousel-inner flex transition-transform duration-300 ease-in-out">
      <!-- Carousel Items -->
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature1.png')}}" alt="Feature 1" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature2.png')}}" alt="Feature 2" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature3.png')}}" alt="Feature 3" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature4.png')}}" alt="Feature 4" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature5.png')}}" alt="Feature 5" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature6.png')}}" alt="Feature 6" class="w-full h-auto rounded-lg shadow-lg">
      </div>
      <div class="carousel-item w-full sm:w-1/2 lg:w-1/4 flex-shrink-0 px-2">
        <img src="{{asset('assets/img/feature7.png')}}" alt="Feature 7" class="w-full h-auto rounded-lg shadow-lg">
      </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control prev absolute left-2 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10">
      &#8592;
    </button>
    <button class="carousel-control next absolute right-2 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10">
      &#8594;
    </button>
  </div>
</div>

<!-- Carousel Script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel-inner');
    const prevButton = document.querySelector('.carousel-control.prev');
    const nextButton = document.querySelector('.carousel-control.next');

    let scrollAmount = 0;
    const itemWidth = document.querySelector('.carousel-item').offsetWidth;
    const visibleItems = window.innerWidth < 640 ? 4 : (window.innerWidth < 1024 ? 2 : 4);
    const scrollStep = itemWidth * visibleItems;

    // Function to scroll carousel
    const scrollCarousel = () => {
      if (scrollAmount >= (carousel.scrollWidth - carousel.clientWidth)) {
        scrollAmount = 0; // Reset to start
      } else {
        scrollAmount += scrollStep;
      }
      carousel.style.transform = `translateX(-${scrollAmount}px)`;
    };

    // Autoplay functionality
    const autoplay = () => {
      setInterval(() => {
        scrollCarousel();
      }, 3000); // Adjust autoplay interval as needed
    };

    // Button event listeners
    nextButton.addEventListener('click', () => {
      if (scrollAmount <= (carousel.scrollWidth - carousel.clientWidth)) {
        scrollAmount += scrollStep;
        carousel.style.transform = `translateX(-${scrollAmount}px)`;
      }
    });

    prevButton.addEventListener('click', () => {
      if (scrollAmount > 0) {
        scrollAmount -= scrollStep;
        carousel.style.transform = `translateX(-${scrollAmount}px)`;
      }
    });

    // Start autoplay
    autoplay();
  });
</script>









  {{-- transparent conatainer --}}
  <div class="relative min-h-screen flex flex-col items-center justify-center bg-black bg-opacity-45">
    <img src="{{ asset('assets/img/about.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-0">

    <div class="absolute inset-0 z-10 bg-black bg-opacity-45 flex flex-col items-center justify-center p-4 overflow-y-auto">
        <div class="w-full max-w-md mx-auto">
          <h1 class="text-white font-bold lg:text-lg text-sm text-center mb-3">What Our Customers Say</h1>
            <div class="grid grid-cols-1 lg:gap-6 gap-2 md:grid-cols-2 lg:grid-cols-2">
                <div class="bg-white lg:p-6 h-28 w-100 lg:w-full lg:h-full p-1 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-xl">
                    <p class="lg:text-base text-xs lg:mb-4 leading-relaxed">
                        Magical Hair Colour Shampu exceeded my expectations! The vibrant shade I chose lasted for weeks, and my hair felt soft and nourished. It's easy to use and has a pleasant scent. Highly recommended!
                    </p>
                    <p class="lg:text-lg text-xs font-semibold mb-1">Arti</p>
                </div>
                <div class="bg-white lg:p-6 h-28 w-100 lg:w-full lg:h-full p-1 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-xl">
                    <p class="lg:text-base text-xs lg:mb-4 leading-relaxed">
                        I love how Magical Hair Colour Shampu transformed my hair. The colour was stunning, and my hair felt silky smooth. It's a game-changer for home hair colouring. I'm thrilled with the results!
                    </p>
                    <p class="lg:text-lg text-xs font-semibold mb-1">Ragani</p>
                </div>
                <div class="bg-white lg:p-6 h-28 w-100 lg:w-full lg:h-full p-1 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-xl">
                    <p class="lg:text-base text-xs lg:mb-4 leading-relaxed">
                        Magical Hair Colour Shampu is a must-have for anyone looking to switch up their hair colour. It's gentle on the hair and delivers vibrant, long-lasting results. I'm impressed by its quality and ease of use. Absolutely fantastic!
                    </p>
                    <p class="lg:text-lg text-xs font-semibold mb-1">Gudiya</p>
                </div>
                <div class="bg-white lg:p-6 h-28 w-100 lg:w-full lg:h-full p-1 rounded-lg shadow-md transition duration-300 ease-in-out hover:shadow-xl">
                    <p class="lg:text-base text-xs lg:mb-4 leading-relaxed">
                        I can't get enough of Magical Hair Colour Shampu! The shade I chose perfectly matched my desired look, and my hair feels so healthy and shiny. It's definitely my go-to product for vibrant hair colour.
                    </p>
                    <p class="lg:text-lg text-xs font-semibold mb-1">Kritika</p>
                </div>
            </div>
        </div>
    </div>
</div>







{{-- CONTACT US --}}
<section class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Get in Touch Section -->
        <div class="flex flex-col justify-center bg-white p-6 rounded-lg shadow-md">
          <div class="flex items-center mb-4">
            <h2 class="text-3xl font-bold text-green-900">Get in Touch</h2>
            <div class="flex-1 h-[1px] ml-4 bg-green-900"></div>
          </div>
          <p class="lg:text-lg mb-4">We'd love to hear from you! Whether you have a question about our services or just want to say hello, feel free to reach out.</p>
          <div class="space-y-4">
            <div class="flex items-center">
              <i class="ri-mail-line text-green-800 text-2xl mr-3"></i>
              <p class="lg:text-lg ">mmenterprises33@gmail.com</p>
            </div>
            <div class="flex items-center">
              <i class="ri-smartphone-line text-green-800 text-2xl mr-3"></i>
              <p class="lg:text-lg">+916388337746</p>
            </div>
            <div class="flex items-center">
              <i class="ri-building-4-line text-green-800 text-2xl mr-3"></i>
              <p class="lg:text-lg">H NO.M-53-KH NO-669 G/F CHANAKYA PLACE UTTAM NAGAR NEW DELHI 110059</p>
            </div>
          </div>
          <div class="flex items-center mt-8 mb-4">
            <h2 class="text-3xl font-bold text-green-900">Find us</h2>
            <div class="flex-1 h-[1px] ml-4 bg-green-900"></div>
          </div>
           <!-- Map -->
    <div class="relative w-full h-50" style="padding-bottom: 56.25%;">
      <iframe class="absolute inset-0 w-full h-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27922.969452461188!2d77.69937!3d28.976370000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c65d777dbc689%3A0x9ae636bf73aeb0ac!2zUmFnaHVuYW5kYW4gUHJhc2FkIFNhcnJhZiBKZXdlbGxlcnMg4KSw4KSY4KWB4KSo4KSC4KSm4KSoIOCkquCljeCksOCkuOCkvuCkpiDgpLjgpLDgpY3gpLDgpL7gpKs!5e0!3m2!1sen!2sus!4v1714992234843!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
          <div class="flex items-center mb-4">
            <h2 class="text-3xl font-bold text-green-900">Follow us</h2>
            <div class="flex-1 h-[1px] ml-4 bg-green-900"></div>
          </div>
          <div class="flex space-x-4">
            <div class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
              <i class="ri-facebook-line text-green-800 text-2xl"></i>
            </div>
            <div class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
              <i class="ri-instagram-line text-green-800 text-2xl"></i>
            </div>
          </div>
        </div>
        <!-- Contact Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h2 class="text-3xl font-bold text-green-900 mb-4">Contact Form</h2>
          <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-4 mb-4">
              <div>
                <label for="name" class="block text-sm font-semibold mb-2">Full Name <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" class="form-input w-full p-3 bg-gray-300" required>
              </div>
              <div>
                <label for="phone" class="block text-sm font-semibold mb-2">Phone number</label>
                <input type="text" id="phone" name="phone" class="form-input w-full p-3 bg-gray-300" required>
              </div>
              <div>
                <label for="email" class="block text-sm font-semibold mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="form-input w-full p-3 bg-gray-300" required>
              </div>
            </div>
            <div class="mb-4">
              <label for="message" class="block text-sm font-semibold mb-2">Message</label>
              <textarea id="message" name="message" rows="4" class="form-input w-full p-3 bg-gray-300" required></textarea>
            </div>
            <div class="flex justify-center">
              <button type="submit" class="form-button bg-green-800 hover:bg-green-600 rounded-xl text-white px-12 py-3 text-lg text-center w-full lg:w-1/2">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
{{--footer --}}
<footer class="bg-green-800 py-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Section 1 -->
        <div class="sec1 flex flex-col items-center md:items-start text-center md:text-left">
          <img src="{{asset('assets/img/logo footer.png')}}" alt="" class="rounded-full w-24 mb-4">
          <p class="text-white mb-4">Magical Hair Shampu: Transform Your Look with Ease!</p>
          <div class="flex space-x-4">
            <a href="#" class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
              <i class="ri-facebook-line text-white text-2xl"></i>
            </a>
            <a href="#" class="rounded-full shadow-md w-12 h-12 flex items-center justify-center hover:bg-gray-200">
              <i class="ri-instagram-line text-white text-2xl"></i>
            </a>
          </div>
        </div>
        <!-- Section 2 -->
        <div class="sec2">
          <h2 class="text-white text-xl mb-4">Useful Links</h2>
          <ul class="text-white space-y-2">
            <li><a href="#" class="hover:text-gray-300">Home</a></li>
            <li><a href="#" class="hover:text-gray-300">About</a></li>
            <li><a href="#" class="hover:text-gray-300">Product</a></li>
            <li><a href="#" class="hover:text-gray-300">Contact</a></li>
          </ul>
        </div>
        <!-- Section 3 -->
        <div class="sec3">
          <h2 class="text-white text-xl mb-4">Products</h2>
          <div class="grid grid-cols-2 gap-2">
            <img src="{{asset('assets/img/product1.jpg')}}" alt="" class="w-full h-24 object-cover rounded-lg shadow-md">
            <img src="{{asset('assets/img/product2.jpg')}}" alt="" class="w-full h-24 object-cover rounded-lg shadow-md">
            <img src="{{asset('assets/img/product3.jpg')}}" alt="" class="w-full h-24 object-cover rounded-lg shadow-md">
            <img src="{{asset('assets/img/product4.png')}}" alt="" class="w-full h-24 object-cover rounded-lg shadow-md">
          </div>
        </div>
        <!-- Section 4 -->
        <div class="sec4">
          <h2 class="text-white text-xl mb-4">Get In Touch</h2>
          <div class="space-y-4">
            <div class="flex items-start">
              <i class="ri-whatsapp-line text-white text-2xl mr-3"></i>
              <div>
                <h3 class="text-white">WhatsApp Us</h3>
                <p class="text-gray-300">+916388337746</p>
              </div>
            </div>
            <div class="flex items-start">
              <i class="ri-mail-line text-white text-2xl mr-3"></i>
              <div>
                <h3 class="text-white">Mail Us</h3>
                <p class="text-gray-300">mmenterprises33@gmail.com</p>
              </div>
            </div>
            <div class="flex items-start">
              <i class="ri-smartphone-line text-white text-2xl mr-3"></i>
              <div>
                <h3 class="text-white">Call Us</h3>
                <p class="text-gray-300">+916388337746</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </footer>
  <div class="bg-gray-600 py-6">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
      <p class="text-gray-300 mb-2 md:mb-0">©2023. magicalbrands.info</p>
      <p class="text-gray-300">Developed by Real Victory Groups</p>
    </div>
  </div>
  <!-- Include the Remix Icon CSS for the icons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
  
@endsection