@extends('layouts.app')

@section('content')
<div class="text-center mt-16">
    <h2 class="text-4xl font-bold mb-4">Leon | Full Stack Developer</h2>
    <p class="text-lg text-gray-400">I can make your creativity into real</p>
</div>

<div class="flex flex-wrap justify-center bg-gray-900 text-white py-16">
    <div class="feature-box">
        <i class="fas fa-code fa-5x text-gray-400"></i>
        <h3 class="text-2xl font-semibold mt-4">Clean Code</h3>
        <p class="text-gray-400">Writing maintainable and efficient code following best practices.</p>
    </div>

    <div class="feature-box">
        <i class="fas fa-cogs fa-5x text-gray-400"></i>
        <h3 class="text-2xl font-semibold mt-4">Fast Development</h3>
        <p class="text-gray-400">Rapid prototyping and development with modern frameworks.</p>
    </div>

    <div class="feature-box">
        <i class="fas fa-mobile-alt fa-5x text-gray-400"></i>
        <h3 class="text-2xl font-semibold mt-4">Responsive Design</h3>
        <p class="text-gray-400">Mobile-first approach ensuring perfect display on all devices.</p>
    </div>
</div>
@endsection

@push('styles')
<style>
    .feature-box {
        @apply flex flex-col items-center p-6 mx-4 mb-12 md:mb-0 md:w-1/3;
        transition: all 0.2s ease-in-out;
    }

    .feature-box:hover {
        @apply shadow-md transform -translate-y-1;
    }
</style>
@endpush