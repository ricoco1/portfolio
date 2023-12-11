@extends('portfolio/app')

@section('title', 'Rico Pratama | Portfolio Website')

@section('content')
<nav class="navbar navbar-expand-lg bg-dark py-3" data-bs-theme="dark">
    <div class="container">
        <a href="." class="navbar-brand fw-semibold">Rico Pratama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#about-me" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="#service-section" class="nav-link">My Service</a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio-section" class="nav-link">My Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#tutorial-section" class="nav-link">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a href="#contact-me" class="nav-link">Contact Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('portfolio.sections.about')

@include('portfolio.sections.service')

@include('portfolio.sections.portfolio')

@include('portfolio.sections.tutorial')

@include('portfolio.sections.contact')

@endsection
