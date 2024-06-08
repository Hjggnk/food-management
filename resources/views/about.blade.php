@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">About Us</div>
                <div class="card-body">
                    <h2>Welcome to Food Management</h2>
                    <p>At Food Management, we are dedicated to transforming the way you handle your food inventory and meal planning. Our innovative platform is designed to help individuals, families, and businesses manage their food resources efficiently and sustainably.</p>
                    
                    <h3>Our Mission</h3>
                    <p>Our mission is to reduce food waste and promote sustainable living by providing an easy-to-use app that helps users keep track of their food inventory, plan meals, and make informed purchasing decisions. We believe that by leveraging technology, we can make a significant impact on both individual households and the broader community.</p>
                    
                    <h3>Our Story</h3>
                    <p>Food Management was born out of a simple idea: to create a tool that makes food management easier for everyone. Our team of passionate developers, food enthusiasts, and sustainability advocates came together to address the common challenges people face in managing their food supplies. Whether you're trying to reduce food waste at home or streamline operations in a commercial kitchen, Food Management is here to help.</p>
                    
                    <h3>What We Offer</h3>
                    <ul>
                        <li><strong>Inventory Management:</strong> Easily track what you have in your pantry, fridge, and freezer to avoid overbuying and reduce waste.</li>
                        <li><strong>Meal Planning:</strong> Plan your meals ahead of time with our intuitive meal planning tools, complete with recipe suggestions and nutritional information.</li>
                        <li><strong>Shopping Lists:</strong> Generate shopping lists based on your inventory and meal plans to ensure you only buy what you need.</li>
                        <li><strong>Expiration Alerts:</strong> Receive notifications when items are nearing their expiration dates, so you can use them before they go to waste.</li>
                        <li><strong>Community Support:</strong> Join a community of like-minded individuals who share tips, recipes, and best practices for food management and sustainability.</li>
                    </ul>
                    
                    <h3>Our Vision</h3>
                    <p>We envision a world where food waste is a thing of the past, and everyone has access to the tools they need to manage their food resources effectively. By empowering our users with knowledge and technology, we aim to create a more sustainable and resource-efficient future.</p>

                    <h3>Location</h3>
                    <p>We are based in the heart of Food City, a community passionate about sustainability and innovation. Come visit us or drop us a message to learn more about our services.</p>
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet.js CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<!-- Leaflet.js JavaScript -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map').setView([55.87890, -4.38696], 10); // Update this with your actual coordinates if needed

    // Load and display tile layers on the map (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker
    L.marker([55.87890, -4.38696]).addTo(map) // Update this with your actual coordinates if needed
        .bindPopup('We are here in Food City.')
        .openPopup();
</script>
@endsection
