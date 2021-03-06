@extends('layouts.app')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('buttons')
    <?php
    $id = new \Hashids\Hashids('laravel-crud', 20, 'abcdefghijklmnopqrstuvwzwz');
    ?>
    <div class="card-columns p-auto">
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==1)
                        <style>#one{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #1 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="one" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(1)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(1)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==1)
                        <h5 class="card-title">Button #1</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(1)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==2)
                        <style>#two{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #2 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="two" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(2)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(2)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==2)
                        <h5 class="card-title">Button #2</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(2)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==3)
                        <style>#tree{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #3 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="tree" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(3)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(3)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==3)
                        <h5 class="card-title">Button #3</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(3)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==4)
                        <style>#four{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #4 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="four" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(4)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(4)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==4)
                        <h5 class="card-title">Button #4</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(4)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==5)
                        <style>#five{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #5 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="five" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(5)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(5)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==5)
                        <h5 class="card-title">Button #5</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(5)}}"  class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==6)
                        <style>#six{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #6 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="six" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(6)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(6)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==6)
                        <h5 class="card-title">Button #6</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(6)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==7)
                        <style>#seven{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #7 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="seven" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(7)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(7)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                @foreach($button as $b)
                    @if($b->button_id!==7)
                            <h5 class="card-title">Button #7</h5>
                            <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(7)}}" class="btn btn-dark">Go to</a>
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==8)
                        <style>#eight{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #8 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="eight" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(8)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(8)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==8)
                        <h5 class="card-title">Button #8</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(8)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                @foreach($button as $b)
                    @if($b->button_id==9)
                        <style>#nine{background: {{$b->color}};}</style>
                        <h5 class="card-title">Button #9 Name: {{$b->title}}</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a id="nine" href={{$b->link}} target="_blank" class="btn btn-dark">Go to</a>
                        <a href='/edit?button_id={{$buttonId = $id->encode(9)}}' class="btn btn-success">Edit</a>
                        <a href='/delete?button_id={{$buttonId = $id->encode(9)}}' class="btn btn-danger">Delete</a>
                        @break
                    @endif
                @endforeach
                    @if($b->button_id!==9)
                        <h5 class="card-title">Button #9</h5>
                        <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                        <a href="/config?button_id={{$buttonId = $id->encode(9)}}" class="btn btn-dark">Go to</a>
                    @endif
            </div>
        </div>
    </div>
@endsection
