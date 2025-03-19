@extends('layouts.app')

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
@endpush
