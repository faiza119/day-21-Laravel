<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>📬 Contact Us - Laravel Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #76a9dcff, #defb92ff);
            font-family: 'Segoe UI', sans-serif;
        }
        .contact-card {
            background: #ffffff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }
        .contact-card:hover {
            transform: scale(1.01);
        }
        .form-label {
            font-weight: 600;
        }
        .btn-primary {
            background-color: #4a90e2;
            border: none;
        }
        .btn-primary:hover {
            background-color: #357ab8;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-7">
            <div class="contact-card">
                <h2 class="text-center text-primary mb-4">📬 Get in Touch</h2>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                {{-- Contact Form --}}
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">👤 Full Name</label>
                        <input type="text" name="name" class="form-control shadow-sm" placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">📧 Email Address</label>
                        <input type="email" name="email" class="form-control shadow-sm" placeholder="example@mail.com" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">💬 Your Message</label>
                        <textarea name="message" rows="5" class="form-control shadow-sm" placeholder="Type your message here..." required></textarea>
                    </div>

                    <button class="btn btn-primary w-100 mt-2">
                        🚀 Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
