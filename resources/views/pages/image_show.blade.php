@extends('layout.app')

@section('main')
<div class="container-fluid mt-4 mb-7">
    <div class="row">
        <div class="col-md-12">
            <img src="{{ asset('$images->name', $images->id) }}" alt="">

            <div class="p-2">
                <form action="{{ route('image_destroy') }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn  btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
