<x-app-layout>
    <x-slot:seo> 
        <x-seosnippet :title="$title" :metadesc="$metadesc" :canonical="$canonical" :keywords="$keywords"> </x-seosnippet>
    </x-slot>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
            <!-- Image gallery -->
            <div class="flex flex-col-reverse" x-data="{ tab: 'image-selector-1' }">
                <!-- Image selector -->
                <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
                    <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                        @isset($work->media)
                            @if (count($work->media) > 0)
                                @foreach ( $work->media as $workImage)
                                    <button x-on:click="tab='image-selector-{{$loop->iteration}}'" id="{{'image-selector-'.$loop->iteration}}" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" aria-controls="tabs-1-panel-1" role="tab" type="button">
                                        <span class="sr-only">Angled view</span>
                                        <span class="absolute inset-0 overflow-hidden rounded-md">
                                            <img src="{{ asset('storage/'.$workImage->path) }}" alt="" class="h-full w-full object-cover object-center">
                                        </span>
                                        <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                                        <span class="pointer-events-none absolute inset-0 rounded-md ring-2 ring-transparent ring-offset-2" aria-hidden="true"></span>
                                    </button>
                                @endforeach
                            @else
                                <button id="image-selector-1" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" aria-controls="tabs-1-panel-1" role="tab" type="button">
                                    <span class="sr-only">Angled view</span>
                                    <span class="absolute inset-0 overflow-hidden rounded-md">
                                        <img src="{{ asset('image/static/default-work.jpg') }}" alt="" class="h-full w-full object-cover object-center">
                                    </span>
                                    <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                                    <span class="pointer-events-none absolute inset-0 rounded-md ring-2 ring-transparent ring-offset-2" aria-hidden="true"></span>
                                </button>
                            @endif
                        @endisset
                    </div>
                </div>
        
                <div class="aspect-h-1 aspect-w-1 w-full">
                    <!-- Tab panel, show/hide based on tab state. -->
                    <div id="image-preview" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                        @isset($work->media)
                            @if (count($work->media) > 0)
                                @foreach ( $work->media as $prevImage)
                                    <img x-show="tab=='image-selector-{{$loop->iteration}}'" src="{{ asset('storage/'.$prevImage->path) }}" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
                                @endforeach
                            @else
                                <img src="{{asset('images/static/default-work.jpg')}}" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
                            @endif
                        @endisset
                    </div>
        
                    <!-- More images... -->
                </div>
            </div>
    
            <!-- Product info -->
            <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
                <div class="flex justify-between items-center">
                    <div class="grow">
                        <p class="uppercase font-semibold text-accent tracking-loose"> {{ $work->excerpt }} </p>            
                        <h1 class="text-2xl lg:text-3xl text-primary font-bold tracking-tight"> {{ $work->title }} </h1>
                    </div>
                    @if ($work->thumbnail)
                        <img class="w-24 h-12 object-contain object-center grow-0 shrink-0" src="{{ '/storage/'.$work->thumbnail }}" alt="">
                    @else
                        <img class="w-24 h-12 object-contain object-center grow-0 shrink-0" src="{{ asset('images/static/default-client-logo.png') }}" alt="">
                    @endif
                </div>
                <!-- Reviews -->
                {{-- 
                <div class="mt-3">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <!-- Active: "text-indigo-500", Inactive: "text-gray-300" -->
                            <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                    </div>
                </div>
                --}}
    
                <div class="mt-6">
                    <h3 class="sr-only">Description</h3>
        
                    <div class="space-y-6 text-base text-gray-700">
                        {!! $work->description !!}
                    </div>
                </div>

                <section aria-labelledby="details-heading" class="mt-6">
                    <h2 id="details-heading" class="sr-only">Box Contents</h2>
        
                    <div class="divide-y divide-gray-200 border-t border-b">
                    <div x-data="{ open: false }">
                        <!-- Expand/collapse question button -->
                        <button x-on:click="open=!open" type="button" class="group relative flex w-full items-center justify-between py-6 text-left" aria-controls="disclosure-1" aria-expanded="false">
                            <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                            <span class="uppercase text-sm font-light text-primary tracking-loose">Box Contents</span>
                            <span class="ml-6 flex items-center">
                                <!-- Open: "hidden", Closed: "block" -->
                                <svg x-show="!open" class="h-6 w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <!-- Open: "block", Closed: "hidden" -->
                                <svg x-show="open" class="h-6 w-6 text-gray-400 group-hover:text-indigo-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                </svg>
                            </span>
                        </button>
                        <div x-show="open" class="prose prose-sm pb-6" id="disclosure-1">
                            <ul role="list">
                                @isset($work->box_contents)
                                    @foreach ($work->box_contents as $box_content)
                                        <li> {{ $box_content }} </li>
                                    @endforeach
                                @endisset
                            </ul>
                        </div>
                    </div>
        
                    <!-- More sections... -->
                    </div>
                </section>
    
                <div class="mt-6">  
                    <p> Make a call or email to curate similar hamper with us: </p> 
                    <div class="mt-4 flex gap-4">
                        <a href="https://wa.me/+919150241115" class="flex max-w-xs flex-1 items-center justify-center rounded-full border border-transparent bg-primary px-8 py-3 text-base font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.943" height="23" viewBox="0 0 22.943 23">
                                <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="22.943" height="23" fill="#FFF"/>
                                </clipPath>
                                </defs>
                                <g id="Group_231" data-name="Group 231" transform="translate(0 0)">
                                <g id="Group_5" data-name="Group 5" transform="translate(0 0)" clip-path="url(#clip-path)">
                                    <path id="Path_10" data-name="Path 10" d="M0,23l1.649-6.152a11.384,11.384,0,1,1,4.535,4.5Zm6.491-3.962.389.232a9.242,9.242,0,1,0-3.162-3.134l.239.393-.92,3.435Z" transform="translate(0 0)" fill="#FFF"/>
                                    <path id="Path_11" data-name="Path 11" d="M19.088,16.261a1.91,1.91,0,0,0-1.627-.367c-.423.173-.692.835-.966,1.172a.4.4,0,0,1-.524.114,7.37,7.37,0,0,1-3.677-3.15.451.451,0,0,1,.057-.616,2.494,2.494,0,0,0,.668-1.084,2.371,2.371,0,0,0-.3-1.284,3.038,3.038,0,0,0-.948-1.428,1.3,1.3,0,0,0-1.41.209A2.864,2.864,0,0,0,9.37,12.1a3.216,3.216,0,0,0,.089.72,5.945,5.945,0,0,0,.691,1.591,12.639,12.639,0,0,0,.72,1.1A11.14,11.14,0,0,0,14,18.406a9.452,9.452,0,0,0,1.949.927,4.327,4.327,0,0,0,2.269.359,2.748,2.748,0,0,0,2.058-1.531,1.333,1.333,0,0,0,.1-.781c-.118-.538-.846-.858-1.281-1.118" transform="translate(-3.279 -3.321)" fill="#FFF" fill-rule="evenodd"/>
                                </g>
                                </g>
                            </svg>
                            Whatsapp
                        </a>
                        <a href="mailto:info@radgifts.in" class="flex max-w-xs flex-1 items-center justify-center rounded-full border border-transparent bg-accent px-8 py-3 text-base font-medium text-white hover:bg-accent-dark focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="14.4" viewBox="0 0 18 14.4">
                                <path id="Icon_material-round-email" data-name="Icon material-round-email" d="M19.2,6H4.8A1.8,1.8,0,0,0,3.009,7.8L3,18.6a1.805,1.805,0,0,0,1.8,1.8H19.2A1.805,1.805,0,0,0,21,18.6V7.8A1.805,1.805,0,0,0,19.2,6Zm-.36,3.825L12.477,13.8a.91.91,0,0,1-.954,0L5.16,9.825a.765.765,0,1,1,.81-1.3L12,12.3l6.03-3.771a.765.765,0,1,1,.81,1.3Z" transform="translate(-3 -6)" fill="#fff"/>
                            </svg>                              
                            Email
                        </a>
                    </div>
                </div>
    
            </div>
        </div>
        </div>
    </div>  
</x-app-layout>