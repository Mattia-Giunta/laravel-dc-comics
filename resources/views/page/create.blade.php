@extends('layouts.layout')

@section('title', 'DC Comics | Create Create')

@section('content')
    <main>


        <div class="container">
            <h2>Crea un nuovo Comic</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach


                    </ul>
                </div>
            @endif

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="title"
                    />
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea
                        class="form-control"
                        name="description"
                        id="description"
                        rows="3">
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">immagine</label>
                    <input
                        type="text"
                        class="form-control"
                        name="thumb"
                        id="thumb"
                    />
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id="price"
                    />
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input
                        type="text"
                        class="form-control"
                        name="series"
                        id="series"
                    />
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Date di Pubblicazione</label>
                    <input
                        type="text"
                        class="form-control"
                        name="sale_date"
                        id="sale_date"
                    />
                </div>


                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input
                        type="text"
                        class="form-control"
                        name="type"
                        id="type"
                    />
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Crea
                </button>


            </form>
        </div>
    </main>
@endsection
