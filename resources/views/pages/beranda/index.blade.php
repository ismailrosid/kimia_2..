@extends('layouts.app')

@section('content')
    @php
        use Carbon\Carbon;
        Carbon::setLocale('id');
    @endphp
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 px-5 scrollbar posting" style="overflow-y: auto; height: 100vh">
                    @foreach ($postingan as $item)
                        <div class="row justify-content-end my-3">
                            <div class="cl-10">
                                <div class="row">
                                    <div class="col-2">
                                        <img class="img-fluid rounded-circle img-thumbnail" src="hdd_adata.jpg"
                                            alt="" />
                                    </div>
                                    <div class="col-8 d-flex justify-content-center flex-column">
                                        <h5 class="fs-6 m-0"><b>{{ $item->user->name }}</b></h5>
                                        <h5 class="fs-7 text-muted m-0">{{ $item->created_at->diffForHumans() }}</h5>
                                    </div>
                                </div>
                                <img class="img-fluid" src="hdd_adata.jpg" alt="" />
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <i class="m-2 fa-regular fa-heart fs-5"></i>
                                        <i class="m-2 fa-regular fa-comment fs-5"></i>
                                        <i class="m-2 fa-regular fa-share-from-square fs-5"></i>
                                    </div>
                                    <div>
                                        <i class="m-2 fa-regular fa-floppy-disk fs-5"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="fw-bold fs-6">{{ $item->likes ? $item->likes->count() : 0 }} likes</h5>
                                </div>
                                <div>
                                    <p>
                                        <b>{{ $item->user->name }} </b>{{ $item->description }}
                                    </p>
                                </div>
                                <div>
                                    <h5 class="fw-bold fs-6 text-muted">
                                        View all {{ $item->comments ? $item->comments->count() : 0 }} comments
                                    </h5>
                                </div>
                                <form action="{{ route('comment.store') }}" method="POST">
                                    @csrf
                                    <div class="d-flex">
                                        <input id="comment-input" name="comment" class="w-100 border-0" type="hidden"
                                            placeholder="Masukan Comment" />
                                        <input id="post-id" name="post_id" class="w-100 border-0" type="text"
                                            placeholder="Masukan Comment" value="{{ $item->id }}" />
                                        <button type="submit" id="comment-submit" class="border-0 bg-white d-none">
                                            Kirim
                                        </button>
                                    </div>
                                </form>
                                <hr />
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-6 px-5 scrollbar folow" style="overflow-y: auto; height: 100vh">
                    <div class="row justify-content-start my-3">
                        <div class="col-10">
                            <h5 class="fs-7 fw-bold m-0">Siapa yang harus dikuti</h5>
                            <h5 class="fs-8 mt-1 text-muted">
                                Orang yang mungkin anda kenal
                            </h5>
                            @foreach ($postingan as $item)
                                <div class="row my-3">
                                    <div class="col-2">
                                        <img class="img-fluid rounded-circle img-thumbnail" src="hdd_adata.jpg"
                                            alt="" />
                                    </div>
                                    <div class="col-10 d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="fs-7 m-0"><b>{{ $item->user->name }}</b></h5>
                                            <h5 class="fs-8 text-muted m-0">{{ $item->user->username }}</h5>
                                        </div>
                                        <button class="border-0 bg-white">
                                            <div class="text-info">Folow</div>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @section('scripts')
    <!-- Script khusus untuk halaman ini -->
    <script>
        console.log('Script Halaman Ini');
    </script>
@endsection --}}
