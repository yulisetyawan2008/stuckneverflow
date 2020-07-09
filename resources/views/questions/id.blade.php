@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="row">
            <div class="col-2">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pertanyaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                </ul>
            </div>

            <div class="col-10">
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <h3>{{$question->title}}</h3>
                        <span class="text-muted">Ditanyakan pada {{$question->created_at}}</span>
                    </div>

                    <div class="ml-auto p-2 bd-highlight">
                        <a href="/questions/ask" class="btn btn-primary" role="button">Ajukan Pertanyaan</a>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <div class="col-1">
                              <button type="button" class="btn btn-link btn-sm">
                                  <i class='fas fa-caret-up' style='font-size:36px'></i>
                              </button>
                              <span style='font-size:24px'>0</span>
                              <button type="button" class="btn btn-link btn-sm">
                                  <i class='fas fa-caret-down' style='font-size:36px'></i>
                              </button>
                            </div>

                            <div class="col-11">
                                {{$question->content}}

                                <br><br><div class="text-end">
                                    <p class="text-right">Ditanyakan oleh <br>{{$question->user->name}}</p>
                                </div>

                                <hr>
                                <small class="form-text text-muted">
                                    comment goes here
                                </small>
                            </div>
                        </div>

                        <br>
                        <div>
                            <h4>1 Jawaban</h4>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-1">
                              <button type="button" class="btn btn-link btn-sm">
                                  <i class='fas fa-caret-up' style='font-size:36px'></i>
                              </button>
                              <span style='font-size:24px'>0</span>
                              <button type="button" class="btn btn-link btn-sm">
                                  <i class='fas fa-caret-down' style='font-size:36px'></i>
                              </button>
                            </div>

                            <div class="col-11">
                                {{$question->content}}

                                <br><br><div class="text-end">
                                    <p class="text-right">Dijawab oleh <br>{{$question->user->name}}</p>
                                </div>

                                <hr>
                                <small class="form-text text-muted">
                                    comment goes here
                                </small>
                            </div>
                        </div>

                        <hr>

                        <br>
                        <div>
                            <h4>Jawaban Anda</h4>
                        </div>

                        <div class="form-group">
                            <textarea
                                class="form-control form-control-sm"
                                name="content"
                                rows="8"
                                cols="95"
                                id="questionContent"
                            ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
                    </div>

                    <div class="3">
                        right side
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection