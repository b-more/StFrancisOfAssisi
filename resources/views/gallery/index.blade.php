@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Page Title -->
    <div class="text-center mb-10">
        <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">School Gallery</h1>
        <div class="w-20 h-1 bg-secondary mx-auto mb-4"></div>
        <p class="text-gray-600">Capturing memories and moments from our school activities</p>
    </div>

    <!-- Category Filters (if needed) -->
    <div class="flex flex-wrap justify-center gap-4 mb-8">
        <a href="{{ route('gallery.index') }}" class="px-4 py-2 rounded-full {{ !isset($category) ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            All Images
        </a>
        <a href="{{ route('gallery.category', 'campus') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'campus' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Campus
        </a>
        <a href="{{ route('gallery.category', 'events') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'events' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Events
        </a>
        <a href="{{ route('gallery.category', 'students') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'students' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Students
        </a>
        <a href="{{ route('gallery.category', 'activities') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'activities' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Activities
        </a>
        <a href="{{ route('gallery.category', 'sports') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'sports' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Sports
        </a>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @forelse($images as $image)
            <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg h-64">
                <img src="{{ Storage::url($image->path) }}"
                     alt="{{ $image->alt_text ?? $image->title }}"
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
                     onclick="openModal('{{ Storage::url($image->path) }}', '{{ $image->title }}', '{{ $image->description }}')">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-25 transition-opacity duration-300"></div>
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="font-semibold text-lg">{{ $image->title }}</h3>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-10">
                <div class="text-5xl text-gray-300 mb-4">
                    <i class='bx bx-image'></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No Images Found</h3>
                <p class="text-gray-500">{{ isset($category) ? "No images available in the $category category." : "No gallery images available yet." }}</p>
            </div>
        @endforelse
    </div>

    <!-- Modal -->
    <div id="imageModal"
         class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 p-4 hidden"
         onclick="closeModal()">
        <div class="relative max-w-4xl w-full" onclick="event.stopPropagation()">
            <button onclick="closeModal()"
                    class="absolute -top-10 right-0 text-white hover:text-gray-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
            </button>
            <img id="modalImage"
                 src=""
                 alt="Enlarged view"
                 class="w-full h-auto rounded-lg">
            <div class="bg-black bg-opacity-75 rounded-b-lg p-4 mt-0">
                <h3 id="modalTitle" class="text-white text-xl font-bold mb-2"></h3>
                <p id="modalDescription" class="text-white/90 text-sm"></p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openModal(imagePath, title, description) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const modalTitle = document.getElementById('modalTitle');
        const modalDescription = document.getElementById('modalDescription');

        modalImage.src = imagePath;
        modalTitle.textContent = title;
        modalDescription.textContent = description;

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal with escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
</script>
@endpush

{{-- @extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="relative bg-gradient-to-r from-primary/80 to-primary/60 py-32">
    <img src="{{ asset('images/gallery-banner.jpg') }}" alt="Photo Gallery" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay"
         onerror="this.src='https://via.placeholder.com/1920x600?text=School+Gallery'">
    <div class="relative container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">School Gallery</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Explore our vibrant school community through images
        </p>
    </div>
</div>

<!-- Main Content -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Albums Grid -->
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Photo Albums</h2>

            <div class="grid md:grid-cols-3 gap-8">
                @forelse($albums ?? [] as $album)
                    <!-- Album Card -->
                    <a href="{{ route('gallery.show', $album->slug) }}" class="block group">
                        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                            <div class="relative aspect-video">
                                <img src="{{ asset($album->cover_image) }}" alt="{{ $album->title }}"
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                     onerror="this.src='https://via.placeholder.com/600x400?text=Album'">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                    <h3 class="text-white font-semibold text-lg">{{ $album->title }}</h3>
                                    <p class="text-white/80 text-sm">{{ $album->photos_count ?? 0 }} photos</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <!-- If no albums found, show these placeholder albums -->
                    <!-- Campus Facilities Album -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="relative aspect-video">
                            <img src="{{ asset('images/gallery/campus.jpg') }}" alt="Campus Facilities"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=Campus+Facilities'">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h3 class="text-white font-semibold text-lg">Campus Facilities</h3>
                                <p class="text-white/80 text-sm">12 photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sports Day 2023 Album -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="relative aspect-video">
                            <img src="{{ asset('images/gallery/sports-day.jpg') }}" alt="Sports Day 2023"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=Sports+Day+2023'">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h3 class="text-white font-semibold text-lg">Sports Day 2023</h3>
                                <p class="text-white/80 text-sm">24 photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Graduation Ceremony Album -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="relative aspect-video">
                            <img src="{{ asset('images/gallery/graduation.jpg') }}" alt="Graduation Ceremony"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=Graduation+Ceremony'">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h3 class="text-white font-semibold text-lg">Graduation Ceremony</h3>
                                <p class="text-white/80 text-sm">18 photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Science Fair Album -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="relative aspect-video">
                            <img src="{{ asset('images/gallery/science-fair.jpg') }}" alt="Science Fair"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=Science+Fair'">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h3 class="text-white font-semibold text-lg">Science Fair</h3>
                                <p class="text-white/80 text-sm">15 photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cultural Day Album -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="relative aspect-video">
                            <img src="{{ asset('images/gallery/cultural-day.jpg') }}" alt="Cultural Day"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=Cultural+Day'">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h3 class="text-white font-semibold text-lg">Cultural Day</h3>
                                <p class="text-white/80 text-sm">20 photos</p>
                            </div>
                        </div>
                    </div>

                    <!-- School Trip Album -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                        <div class="relative aspect-video">
                            <img src="{{ asset('images/gallery/school-trip.jpg') }}" alt="School Trip"
                                 class="w-full h-full object-cover"
                                 onerror="this.src='https://via.placeholder.com/600x400?text=School+Trip'">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
                                <h3 class="text-white font-semibold text-lg">School Trip</h3>
                                <p class="text-white/80 text-sm">22 photos</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Recent Photos Section -->
        <div class="max-w-7xl mx-auto mt-20">
            <h2 class="text-3xl font-bold text-primary mb-10 text-center">Recent Photos</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($recentPhotos ?? [] as $photo)
                    <!-- Photo Item -->
                    <div class="relative aspect-square rounded-lg overflow-hidden shadow-sm group">
                        <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->alt_text }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                             onerror="this.src='https://via.placeholder.com/400?text=Photo'">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <a href="{{ route('gallery.photo', $photo->id) }}" class="text-white">
                                <i class='bx bx-search-alt-2 text-3xl'></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <!-- Placeholder Photos Grid -->
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="relative aspect-square rounded-lg overflow-hidden shadow-sm group">
                            <img src="{{ asset('images/gallery/photo' . $i . '.jpg') }}"
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                 onerror="this.src='https://via.placeholder.com/400?text=Photo+{{ $i }}'">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="text-white">
                                    <i class='bx bx-search-alt-2 text-3xl'></i>
                                </span>
                            </div>
                        </div>
                    @endfor
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-primary mb-4">Join Our School Community</h2>
        <p class="max-w-2xl mx-auto mb-8">
            Experience the vibrant educational environment at St. Francis of Assisi Private School. Apply now for the upcoming academic year.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('admissions.apply') }}" class="px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors font-medium">
                Apply Now
            </a>
            <a href="{{ route('contact') }}?tour=1" class="px-8 py-3 bg-white text-primary border border-primary rounded-lg hover:bg-gray-50 transition-colors font-medium">
                Schedule a Tour
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Initialize any gallery-specific JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // You could add lightbox initialization or masonry grid setup here
        // For now, this is just a placeholder
    });
</script>
@endpush --}}
