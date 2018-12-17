@extends('layout.app')

@section('main')
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-8">
            <form class="mt-4" action="{{route('hero.store')}}" method="post">
                @csrf
                <div class="d-flex flex-row">
                    <div class="pt-6 p-2 w-50 md-auto ml-auto">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nick" id="nick_name​" placeholder="Nick Name​" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2 w-50 md-auto ml-auto">
                        <div class="form-group">
                            <input type="text" class="form-control" name="real" id="nick_name​" placeholder="Nick Name​" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-50 md-auto ml-auto">
                        <div class="form-group">
                            <label for="characteristic">Characteristic</label>
                            <textarea class="form-control" name="characteristic" id="characteristic" rows="3">
             </textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-50 md-auto ml-auto">
                        <div class="form-group">
                            <label for="superpowers">Superpowers</label>
                            <textarea class="form-control" name="superpowers" id="superpowers" rows="3">
              </textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="p-2  w-50 md-auto ml-auto">
                        <div class="form-group">
                            <label for="catch_phrase">Catch Phrase</label>
                            <input type="text" class="form-control" name="catch_phrase" id="catch_phrase" placeholder="Catch Phrase">
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
    </div>
</div>
@endsection
