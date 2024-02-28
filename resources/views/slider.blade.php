




<style> 

.img-fluid {
  height: 360px;
  object-fit: cover;
}

</style>


<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5">

<div class="rounded overflow-hidden shadow-lg">
<img src="{{ url('images/pc_gamer_photo.jpg') }}" alt="Image" class="img-fluid" width="100%" height="200">

  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">PC GAMER</div>
    <p class="text-gray-700 text-base ">
    Unleash your gaming potential with our powerful PC Gamer. Experience stunning graphics and unbeatable performance for ultimate gaming thrills.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'pc_gamer')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  
    <img src="{{ url('images/laptop_bg.jfif') }}" alt="Image" class="img-fluid" width="100%" height="200"> 
  
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">LAPTOPE</div>
    <p class="text-gray-700 text-base ">
      Dominate the gaming world on the go with our high-performance Gaming Laptop. Immerse yourself in thrilling gameplay wherever you are.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'pc_portable')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/carte_mere_bg.jpg') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">MOTHERBOARD</div>
    <p class="text-gray-700 text-base ">
      Upgrade your system's core with our cutting-edge Motherboard. Unlock limitless possibilities and harness the true potential of your PC.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'motherboard')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/ryzen_bg.jpg') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">PROCESSOR</div>
    <p class="text-gray-700 text-base ">
      Unleash unparalleled speed and performance with our advanced Processor. Power through tasks and experience seamless multitasking like never before.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'Processor')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View More</span>
            </button>
          </div>
      </form>

  </div>
</div>


<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/adobestock-394422035.webp') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">STORAGE</div>
    <p class="text-gray-700 text-base ">
      Expand your storage capacity and accelerate your system with our high-speed SSDs and spacious HDDs. Store more, access faster.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'storage')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>


<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/ram_bg.webp') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">RAM</div>
    <p class="text-gray-700 text-base ">
      Elevate your system's performance with our lightning-fast RAM modules. Experience smoother multitasking and faster data processing for unparalleled efficiency.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'ram')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/graphic_card_bg.webp') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">GRAPHIC CARD</div>
    <p class="text-gray-700 text-base ">
      Experience breathtaking visuals and fluid gaming with our cutting-edge Graphic Card. Elevate your gaming experience to new heights
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'carte_graphic')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>


<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/boitier_bg.png') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">GAMING BOX</div>
    <p class="text-gray-700 text-base ">
      Take your gaming on the road with our Gaming Box. Enjoy powerful performance and immersive gameplay wherever you go.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'gaming_box')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>


<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/power_suplly_bg.gif') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">POWER SUPPLY</div>
    <p class="text-gray-700 text-base ">
      Ensure reliable and stable power delivery to your system with our high-quality Power Supply. Keep your gaming rig running smoothly
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'power_supply')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/aircooler_bg.jpg') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">AIRCOOLER</div>
    <p class="text-gray-700 text-base ">
      Keep your system cool under pressure with our efficient Air Cooler. Optimal cooling for smooth performance and prolonged hardware lifespan.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'aircooler')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/moniteur_bg.jpg') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">SCREENS</div>
    <p class="text-gray-700 text-base ">
    Elevate your viewing experience with our stunning Screens. Immerse yourself in vibrant colors and sharp details for an unparalleled visual journey.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'screens')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>

<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/pack-gamer-spirit-of-gamer-pro-mk3-casque-souris.webp') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">ACCESSOIRE</div>
    <p class="text-gray-700 text-base ">
      Enhance your gaming setup with our premium Accessories. From responsive keyboards and precise mice to immersive headsets and comfortable mouse pads
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'accessorie')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>


<div class="rounded overflow-hidden shadow-lg">
  <img src="{{ url('images/GAMING_CHAIRES_DESK.webp') }}" alt="Image" class="img-fluid" width="100%" height="100%"> 
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">GAMING CHAIRES & DESK</div>
    <p class="text-gray-700 text-base ">
      Experience ultimate comfort and style with our ergonomic Gaming Chairs & Desks. Elevate your gaming station for peak performance and immersive gameplay..
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
        <form action="{{route('product.ret', 'gaming_chairs_desk')}}" method="POST">
          @csrf
          <div class="px-6 text-right">
            <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded-lg">
                <span class="text-xl">View Products</span>
            </button>
          </div>
      </form>

  </div>
</div>
</div>



