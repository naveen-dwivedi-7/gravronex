@extends('layouts.app')

@section('content')
<section 
    class="hero-section fade-in bg-cover bg-center bg-no-repeat min-h-screen" 
    style="background-image: url('{{ asset('images/Data Analytics Wallpapers.jpg') }}');">
    <div class="container text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Welcome to Gravronex</h1>
        <p class="text-lg mb-6 text-green-400">"Gravronex – Smart Solutions."</p>
        <a href="/contact" class="btn bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">
            Get in Touch
        </a>
    </div>
</section>




{{-- 🌟 Features Carousel Section (Now placed before Services) --}}
<section class="features-carousel-section fade-in">
    <div class="container">
        <h2 class="text-center mb-10">Our Capabilities </h2> {{-- <-- Changed heading to Our Services --}}
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @php
                    $features = [
                        ['title' => 'Cloud Infrastructure', 'image' => 'cloud-database-services-1.jpg'],
                        ['title' => 'Data Center', 'image' => 'datacenter1.jfif'],
                        ['title' => 'Facility Management', 'image' => 'datacenter2.jfif'],
                        ['title' => 'IT Operations', 'image' => 'datacenter3.jfif'],
                        ['title' => 'Cyber Security', 'image' => 'datasecurity.jfif'],
                        ['title' => 'Secure Access', 'image' => 'datasecurity2.jfif'],
                    ];
                @endphp

                @foreach($features as $feature)
                    <div class="swiper-slide">
                        <div class="feature-card">
                            <img src="{{ asset('images/' . $feature['image']) }}" alt="{{ $feature['title'] }}">
                            <h3>{{ $feature['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

{{-- 💼 Services Section (Now placed after Capabilities) --}}
<section class="services fade-in">
    <div class="container">
        <h2>Our Services</h2> {{-- <-- Changed heading to Our Capabilities --}}
        <div class="cards">
            @php
                $services = [
                    ['title' => 'Network Monitoring System', 'desc' => 'A Network Monitoring System (NMS) keeps track of your network’s performance, security, and health in real-time.'],
                    ['title' => 'Email Security and archival solution', 'desc' => 'Email Security & Archival Solutions protect against cyber threats while ensuring compliance and seamless data management'],
                    ['title' => 'Endpoint security solution', 'desc' => 'Protect devices, data, and networks from cyber threats with ease.'],
                    ['title' => 'SSO & MFA solution', 'desc' => 'SSO and MFA solutions to streamline user access, enhance security, boost productivity, ensure compliance, and provide expert support for optimal protection and efficiency.'],
                    ['title' => 'IT infrastructure', 'desc' => 'IT infrastructure comprises the hardware, software, networks, and data centers that support an organization’s technology services and operations.'],
                    ['title' => 'Digital Marketing', 'desc' => 'Services Full range of Digital Services like Website Designing, eCommerce, SEO services.'],
                    ['title' => 'Hardware', 'desc' => 'Hardware, Laptops, Computers, Firewalls, Servers, Printers, Network, Cyber Security, NAS etc.'],
                ];
            @endphp

            @foreach($services as $index => $service)
                <div class="card hover-zoom slide-up" style="animation-delay: {{ $index * 0.2 }}s;">
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="partners fade-in">
    <div class="container">
        <h2>Trusted Partners</h2>
        <div class="partner-logos">
            <img src="{{ asset('images/logo-etap.svg') }}" alt="etap">
            <img src="{{ asset('images/schneider.png') }}" alt="schneider">
            <img src="{{ asset('images/google workspace.png') }}" alt="google workspace">
        </div>
    </div>
</section>

{{-- 💼 Team Section --}}
<section class="team-section fade-in">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            @php
                $team = [
                    ['name' => 'Priyanka', 'designation' => 'Product Manager & Operations', 'photo' => 'images/team/priyanka.jpeg'],
                    ['name' => 'Riya Singh', 'designation' => 'CTO & VP', 'photo' => 'images/team/riya singh.jpeg'],
                ];
            @endphp

            @foreach($team as $person)
                <div class="team-card">
                    <img src="{{ asset($person['photo']) }}" alt="{{ $person['name'] }}">
                    <h3>{{ $person['name'] }}</h3>
                    <p>{{ $person['designation'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
