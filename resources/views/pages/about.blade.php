@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
    <h2>What is {{ config('app.name') }}?</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a>.</p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle" aria-hidden="true">
                        This app has been built by @etsmo for learning purposes.
                    </i>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve the <a href="#">source code </a>.</p>
        <h2>What is Laramap?</h2>
        <P>Laramap is the website by which {{ config('app.name') }} was inspired :).</P>
        <P>More info <a href="https://laramap.com/p/about">here</a>.</P>
        <hr>
        <h2>Which tools and services are used in {{ config('app.name') }}?</h2>
        <p></p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@endsection
