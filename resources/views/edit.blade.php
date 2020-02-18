@extends('layouts.app')
@section('config')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Button config</div>
                    <div class="card-body">
                        <form method="POST" action="/edit">
                            @csrf
                            <input type="hidden" id="button_id" name="button_id" value={{$button_id}}>
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link" class="col-md-4 col-form-label text-md-right">Link</label>
                                <div class="col-md-6">
                                    <input id="link" type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="link" autofocus>

                                    @error('link')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="color" class="col-md-4 col-form-label text-md-right">Color</label>
                                <div class="form-group col-md-6">
                                    <select name="color" id="color" class="form-control">
                                        <option selected name="color" value="red">red</option>
                                        <option name="color" value="blue">blue</option>
                                        <option name="color" value="green">green</option>
                                        <option name="color" value="yellow">yellow</option>
                                        <option name="color" value="black">black</option>
                                        <option name="color" value="orange">orange</option>
                                        <option name="color" value="pink">pink</option>
                                        <option name="color" value="purple">purple</option>
                                        <option name="color" value="brown">brown</option>
                                    </select>
                                    @error('color')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="save" type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
