@extends('detail-portfolio/app')
@section('title', 'Detail Portfolio')
@section('content')
<nav class="navbar navbar-expand-lg bg-dark py-3" data-bs-theme="dark">
    <div class="container text-white"> <!-- Ubah kelas text-secondary menjadi text-white -->
        <a href="." class="navbar-brand fw-semibold text-white">Rico Pratama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/#about-me" class="nav-link ">About Me</a> <!-- Ubah kelas text-secondary menjadi text-white -->
                </li>
                <li class="nav-item">
                    <a href="/#service-section" class="nav-link ">My Service</a> <!-- Ubah kelas text-secondary menjadi text-white -->
                </li>
                <li class="nav-item">
                    <a href="/#portfolio-section" class="nav-link ">My Portfolio</a> <!-- Ubah kelas text-secondary menjadi text-white -->
                </li>
                <li class="nav-item">
                    <a href="/#tutorial-section" class="nav-link ">Tutorial</a> <!-- Ubah kelas text-secondary menjadi text-white -->
                </li>
                <li class="nav-item">
                    <a href="/#contact-me" class="nav-link ">Contact Me</a> <!-- Ubah kelas text-secondary menjadi text-white -->
                </li>
            </ul>
        </div>
    </div>
</nav>

@include('detail-portfolio.sections.header')

@include('detail-portfolio.sections.article')

@endsection