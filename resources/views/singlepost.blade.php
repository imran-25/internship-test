@extends('layouts.master')

@section('title')
    "Home"
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <article class="p-3">
                        <h2>About</h2>
                        <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem non eveniet obcaecati consectetur enim ab voluptates praesentium laudantium fugit nam! Ratione quisquam nemo exercitationem perspiciatis repellat in saepe totam neque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus officiis accusamus voluptate iste, porro delectus maiores libero. Animi repellat quo rem veritatis cum, libero consectetur fuga praesentium sequi dolorum molestiae!</p>
                    </article>
                </div>
                <div class="col-md-9 offset-md-3">
                    <section class="p-3"
                        <article>
                            <h2>{{$post->title}}</h2>
                            <h4>Author- {{$post->user->name}}</h4>

                            <p>
                                {{$post->description}}
                            </p>
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
