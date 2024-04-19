@extends('layouts.master')

@section('styles')
    <style>
        .panel-heading {
            font-size: 20px;
            color: black;
            /* Set font color to black */
        }

        .panel-body {
            color: #000;
        }

        .about,
        .library-info {
            color: black;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
@endsection

@section('content')
    {{-- <div class="container bg-image"> --}}
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>NSTU Central Library</h1>
                <div class="panel-body">
                    <h2>About</h2>
                    <p class="about">NSTU Central Library is one of the leading Public University Library of Bangladesh
                        established in
                        2006 for providing excellent library and information services to the University community. It is an
                        integral part of the University which is designed to fulfill the various approaches of the library
                        users. From the beginning, library is improving day by day of its infrastructural facilities,
                        systems and services. The Library is committed to provide the best library services to the students,
                        faculty members and researchers.
                    </p>
                    <!-- Add the image here -->
                    <img src="images/library.jpg" alt="NSTU Central Library" style="max-width: 100%; height: auto;">
                </div>
                <div class="library-info">
                    <h2>Library Information</h2>
                    <ul>
                        <li>Total Books: 23926</li>
                        <li>Journal (Hard Copy): 627</li>
                        <li>Total e-Books: 13293</li>
                        <li>Total e-Books Service Provider: 4 (Sage Publications Indian Pvt. Ltd; Cambridge University
                            Press; Taylor and Francis Group; World Scientific)</li>
                        <li>Total e-Journal Service Provider: 3 (JSTOR, Emerald, IEEE)</li>
                    </ul>
                </div>
                <footer class="footer">
                    <div class="container">
                        <p>&copy; 2024 NSTU Central Library. All rights reserved.</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
@endsection
