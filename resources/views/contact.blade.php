@extends('layouts.app')
@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@section('content')
<section class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="{{ route('contact.store') }}" method="POST">
    @csrf
    
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <textarea name="message" placeholder="Your Message"></textarea>

    <button type="submit">Send Message</button>
</form>
    </div>
</section>
@endsection
