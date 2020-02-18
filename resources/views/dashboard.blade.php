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
    <div class="card-columns p-auto">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #1</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=1" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #2</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=2" target="_blank" class="btn btn-dark">Go to</a>

            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #3</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=3" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #4</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=4" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #5</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=5" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #6</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=6" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #7</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=7" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #8</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=8" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Button #9</h5>
                <p class="card-text">If the button is grey you will be redirected to configure it.</p>
                <a href="/config?button_id=9" target="_blank" class="btn btn-dark">Go to</a>
            </div>
        </div>

    </div>
@endsection
