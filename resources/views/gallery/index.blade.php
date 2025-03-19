@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Page Title -->
    <div class="text-center mb-10">
        <h1 class="text-3xl md:text-4xl font-bold text-primary mb-2">School Gallery</h1>
        <div class="w-20 h-1 bg-secondary mx-auto mb-4"></div>
        <p class="text-gray-600">Capturing memories and moments from our school community</p>
    </div>

    <!-- Category Filters (Updated with new categories) -->
    <div class="flex flex-wrap justify-center gap-4 mb-8">
        <a href="{{ route('gallery.index') }}" class="px-4 py-2 rounded-full {{ !isset($category) ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            All Images
        </a>
        <a href="{{ route('gallery.category', 'staff') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'staff' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Staff
        </a>
        <a href="{{ route('gallery.category', 'ecl') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'ecl' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            ECL
        </a>
        <a href="{{ route('gallery.category', 'infrastructure') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'infrastructure' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Infrastructure
        </a>
        <a href="{{ route('gallery.category', 'primary') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'primary' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Primary
        </a>
        <a href="{{ route('gallery.category', 'secondary') }}" class="px-4 py-2 rounded-full {{ isset($category) && $category == 'secondary' ? 'bg-primary text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-800' }} transition-colors">
            Secondary
        </a>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @forelse($images as $image)
            <div class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg h-64">
                <img src="{{ asset($image->path) }}"
                     alt="{{ $image->alt_text ?? $image->title }}"
                     class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110"
                     onclick="openModal('{{ asset($image->path) }}', '{{ $image->title }}', '{{ $image->description }}')">
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
