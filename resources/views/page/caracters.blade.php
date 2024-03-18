@extends('layouts.layout')

@section('title', 'DC Comics | caracters')

@section('content')

<main>
    <h2>Index di Comics</h2>

    <div class="table-responsive">

        <a
            class="btn btn-primary"
            href="{{ route('comics.create') }}"
            >Carica Comic</a
        >


        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">thumb</th>
                    <th scope="col">price</th>
                    <th scope="col">series</th>
                    <th scope="col">sale_date</th>
                    <th scope="col">type</th>
                    {{-- <th scope="col">Descrizione</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr class="">
                        <td>{{ $item->id}}</td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $item['id'] ] ) }}">
                                {{ $item->title }}
                            </a>
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->thumb }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->sale_date }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <button class="btn btn-primary">
                                edit
                            </button>
                            <button class="btn btn-primary">
                                delete
                            </button>
                        </td>
                        {{-- <td>{{ $item['descrizione'] }}</td> --}}
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</main>
@endsection
