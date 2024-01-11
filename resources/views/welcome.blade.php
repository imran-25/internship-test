@extends('layouts.master')

@section('title')
    "Home"
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 sidebar ">
                    <article class="p-3">
                        <h2>About</h2>
                        <p class="text-justify">
                            I'm Md Imran Hossain from Uttara, looking for an opportunity to be a Dedicated Laravel Developer. I am passionate about learning how to develop new applications and excited to work with your Laravel developer team.

                            I've completed the  "PHP with Laravel Framework" course by BASIS on SEIP program. In this course, I have completed two projects.</p>
                        <p>I believe my coding skills and my  "PHP with Laravel Framework"  course experience make me a great fit for the Laravel developer position with your company. Thank you for taking the time.</p>
                    </article>
                </div>
                <div class="col-md-9 offset-md-3">
                    <section class="p-3">
                        <article>
                            <h2>All Post</h2>

                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4 mb-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="{{ $post->image }}" width="100%" alt="">
                                                <p class="mt-3">{{ substr($post->title, 0, 30) }}</p>
                                                <a href="{{ route('post', $post->id) }}">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </article>
                    </section>
                    <footer class="bg-dark p-4">
                        <a class="btn btn-lg btn-info" href="https://github.com/imran-25"><b>Visit my GitHub Profile</b></a>
                    </footer>
                </div>
            </div>
        </div>
    </section>
@endsection
