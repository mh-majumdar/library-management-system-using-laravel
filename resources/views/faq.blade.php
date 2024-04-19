<!-- resources/views/faq.blade.php -->

@extends('layouts.app')

@section('styles')
    <style>
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .faq-question {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .faq-answer {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
@endsection

@section('content')
    <div class="container faq-container">
        <h1 class="text-center mb-4">Frequently Asked Questions</h1>

        <div class="faq-item">
            <h3 class="faq-question">How do I borrow books from the NSTU Central Library?</h3>
            <p class="faq-answer">To borrow books, you need to be a registered member of the library. Simply visit the
                library's circulation desk with your student ID card or library membership card, and the library staff will
                assist you in borrowing books.</p>
        </div>

        <div class="faq-item">
            <h3 class="faq-question">What are the library's operating hours?</h3>
            <p class="faq-answer">The library is open from Monday to Saturday, from 9:00 AM to 5:00 PM. It is closed on
                Sundays and public holidays.</p>
        </div>

        <div class="faq-item">
            <h3 class="faq-question">Can I access electronic resources from off-campus?</h3>
            <p class="faq-answer">Yes, the library provides remote access to electronic resources such as e-books,
                e-journals, and databases. You can access these resources by logging in to your library account from the
                library's website.</p>
        </div>

        <div class="faq-item">
            <h3 class="faq-question">How can I renew my borrowed books?</h3>
            <p class="faq-answer">You can renew your borrowed books online through your library account on the library's
                website. Alternatively, you can visit the circulation desk in person to renew your books.</p>
        </div>

        <div class="faq-item">
            <h3 class="faq-question">Does the library offer printing and photocopying services?</h3>
            <p class="faq-answer">Yes, the library has printing and photocopying facilities available for library users. You
                can use these services for a nominal fee.</p>
        </div>

        <!-- Add more questions and answers as needed -->
    </div>
@endsection
