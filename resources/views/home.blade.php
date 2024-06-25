<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-white shadow" x-data="{ isOn: false }">
          <div class="center">
            <div class="flex h-16 items-center justify-center">
              <div class="flex items-center">
                  <img class="h-12 w-12" src="images/mixue.svg" alt="Your Company">
              </div>
            </div>
          </div>
        </nav>
      
        <header class="bg-white shadow">
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900" style="text-align: center">Menu</h1>
          </div>
        </header>
        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                  <h2 class="sr-only">Products</h2>
              
                  <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    <a href="#" class="group">
                      <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://mixue.co/wp-content/uploads/2023/01/Boba-Sundae.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <h3 class="mt-4 text-sm text-gray-700">Boba Sundae</h3>
                      <p class="mt-1 text-lg font-medium text-gray-900">Rp. 16.000</p>
                    </a>
                    <a href="#" class="group">
                      <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://mixue.co/wp-content/uploads/2023/01/Berry-Bean-Sundae.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <h3 class="mt-4 text-sm text-gray-700">Berry Bean Sundare</h3>
                      <p class="mt-1 text-lg font-medium text-gray-900">Rp. 16.000</p>
                    </a>
                    <a href="#" class="group">
                      <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://mixue.co/wp-content/uploads/2023/01/Fresh-Squeezed-Lemonade.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <h3 class="mt-4 text-sm text-gray-700">Fresh Squeezed Lemonade</h3>
                      <p class="mt-1 text-lg font-medium text-gray-900">Rp. 10.000</p>
                    </a>
                    <a href="#" class="group">
                      <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://mixue.co/wp-content/uploads/2023/01/Brown-Sugar-Pearl-Milk-Tea-1.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                      </div>
                      <h3 class="mt-4 text-sm text-gray-700">Brown Sugar Pearl Milk Tea</h3>
                      <p class="mt-1 text-lg font-medium text-gray-900">Rp. 19.000</p>
                    </a>
                   <div x-data="{ isOpen: false }"  class="relative z-10" role="dialog" aria-modal="true">
                    <!--
                      Background backdrop, show/hide based on modal state.
                  
                      Entering: "ease-out duration-300"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "ease-in duration-200"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div 
                    x-show="isOpen"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block" aria-hidden="true"></div>

                    <div x-data="{ isOpen: false }"  class="fixed inset-0 z-10 w-screen overflow-y-auto">
                      <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                        <!--
                          Modal panel, show/hide based on modal state.
                  
                          Entering: "ease-out duration-300"
                            From: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                            To: "opacity-100 translate-y-0 md:scale-100"
                          Leaving: "ease-in duration-200"
                            From: "opacity-100 translate-y-0 md:scale-100"
                            To: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                        -->
                        <div x-show="isOpen"
                        x-transition:enter="ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
                        class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                          <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                            <button type="button" @click="isOpen = !isOpen"
                            class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                              <span class="sr-only">Close</span>
                              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                              </svg>
                            </button>
                  
                            <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                              <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-cover object-center">
                              </div>
                              <div class="sm:col-span-8 lg:col-span-7">
                                <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">Basic Tee 6-Pack</h2>
                  
                                <section aria-labelledby="information-heading" class="mt-2">
                                  <h3 id="information-heading" class="sr-only">Product information</h3>
                  
                                  <p class="text-2xl text-gray-900">$192</p>
                  
                                  <!-- Reviews -->
                                  <div class="mt-6">
                                    <h4 class="sr-only">Reviews</h4>
                                    <div class="flex items-center">
                                      <div class="flex items-center">
                                        <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                          <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                        </svg>
                                      </div>
                                      <p class="sr-only">3.9 out of 5 stars</p>
                                      <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                                    </div>
                                  </div>
                                </section>
                  
                                <section aria-labelledby="options-heading" class="mt-10">
                                  <h3 id="options-heading" class="sr-only">Product options</h3>
                  
                                  <form>
                                    <!-- Colors -->
                                    <fieldset aria-label="Choose a color">
                                      <legend class="text-sm font-medium text-gray-900">Color</legend>
                  
                                      <div class="mt-4 flex items-center space-x-3">
                                        <!--
                                          Active and Checked: "ring ring-offset-1"
                                          Not Active and Checked: "ring-2"
                                        -->
                                        <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                          <input type="radio" name="color-choice" value="White" class="sr-only">
                                          <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                                        </label>
                                        <!--
                                          Active and Checked: "ring ring-offset-1"
                                          Not Active and Checked: "ring-2"
                                        -->
                                        <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                          <input type="radio" name="color-choice" value="Gray" class="sr-only">
                                          <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                                        </label>
                                        <!--
                                          Active and Checked: "ring ring-offset-1"
                                          Not Active and Checked: "ring-2"
                                        -->
                                        <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                                          <input type="radio" name="color-choice" value="Black" class="sr-only">
                                          <span aria-hidden="true" class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                                        </label>
                                      </div>
                                    </fieldset>
                  
                                    <!-- Sizes -->
                                    <fieldset class="mt-10" aria-label="Choose a size">
                                      <div class="flex items-center justify-between">
                                        <div class="text-sm font-medium text-gray-900">Size</div>
                                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                                      </div>
                  
                                      <div class="mt-4 grid grid-cols-4 gap-4">
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="XXS" class="sr-only">
                                          <span>XXS</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="XS" class="sr-only">
                                          <span>XS</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="S" class="sr-only">
                                          <span>S</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="M" class="sr-only">
                                          <span>M</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="L" class="sr-only">
                                          <span>L</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="XL" class="sr-only">
                                          <span>XL</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="XXL" class="sr-only">
                                          <span>XXL</span>
                                          <!--
                                            Active: "border", Not Active: "border-2"
                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                          -->
                                          <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                        <!-- Active: "ring-2 ring-indigo-500" -->
                                        <label class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium uppercase text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1">
                                          <input type="radio" name="size-choice" value="XXXL" disabled class="sr-only">
                                          <span>XXXL</span>
                                          <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                              <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                            </svg>
                                          </span>
                                        </label>
                                      </div>
                                    </fieldset>
                  
                                    <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
                                  </form>
                                </section>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
          </div>
        </main>
      </div>
</body>
</html>