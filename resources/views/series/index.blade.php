@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Series</h3>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">Create</button>
            </div>
            <div class="card-body">
                <div class="list-group">
                    @foreach($series as $serie)
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$serie->name}}</h5>
                                <small class="text-muted"><button class="btn btn-danger">Delete</button></small>
                            </div>
{{--                            <p class="mb-1">Some placeholder content in a paragraph.</p>--}}
{{--                            <small class="text-muted">And some muted small print.</small>--}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="modal-createLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-createLabel">Create serie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                            <div class="mb-3">
                                <label for="name-serie" class="form-label">Serie</label>
                                <input type="text" class="form-control" id="name-serie" name="name">
                            </div>
                            <input type="submit" id="save" class="btn btn-primary d-none">
                    </form>
                </div>
                <div class="modal-footer">
                    <label for="save" class="btn btn-primary">Save</label>
                </div>
            </div>
        </div>
    </div>
@endsection
