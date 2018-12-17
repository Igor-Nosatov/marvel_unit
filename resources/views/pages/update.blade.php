@extends('layout.app')

@section('main')
<div class="container-fluid mt-4 mb-7">
    <div class="row">
        <div class="col-md-6">
            <form action="{{route('hero.edit', $heroes->id)}}" method="post">
                @csrf
                <div class="d-flex flex-row">
                    <div class="pt-6 p-2 w-50 md-auto ml-auto">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nick" id="nick_name​" value="{{ $heroes->nick }}" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2 w-50 md-auto ml-auto">
                        <div class="form-group">
                            <input type="text" class="form-control" name="real" id="nick_name​" value="{{ $heroes->real }}" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-50 md-auto ml-auto">
                        <div class="form-group">
                            <label for="characteristic">Characteristic</label>
                            <textarea class="form-control" name="characteristic" id="characteristic" rows="3">{{ $heroes->characteristic  }}
                         </textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-50 md-auto ml-auto">
                        <div class="form-group">
                            <label for="superpowers">Superpowers</label>
                            <textarea class="form-control" name="superpowers" id="superpowers" rows="3">{{ $heroes->superpowers }}
                          </textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-50 md-auto ml-auto">
                        <div class="form-group">
                            <label for="catch_phrase">Catch Phrase</label>
                            <input type="text" class="form-control" name="catch_phrase" id="catch_phrase" value="{{ $heroes->catch_phrase }}" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-25 md-auto ml-auto">
                        <button type="submit" class="w-100 btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset($image->name) }}" alt="Card image cap">
            </div>
            <div class="card" style="width: 18rem;">
                <form action="{{route('image.edit', $heroes->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT')}}
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <input type="hidden" name="hero_id" value={{$heroes->id}}>
                            <div class="form-group">
                                <label for="images">Image</label>
                                <input type="file" class="form-control-file" name="images" id="images" required>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('image.destroy', $heroes->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn  btn-danger">
                        Delete Image
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
