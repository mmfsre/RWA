@extends('layouts.app')

@section('content')
    <div class="table-center container mx-6 my-5">

        <div class="section-title">
            <h2>Korisnici</h2>
        </div>

        <div class="row mx-3 my-5">
            <div class="col-lg-12">

                <table class="table table-hover">
                    <div class="col-lg-3 align-items-start justify-content-evenly mt-2 mb-5">
                        <a href="/users/create">
                            <button class="btn btn-danger fw-bold">DODAJ KORISNIKA</button>
                        </a>
                    </div>
                    <thead class>
                        <tr>
                            <th class="align-middle" scope="col">#</th>
                            <th class="align-middle" scope="col">Korisnik</th>
                            <th class="align-middle" scope="col">E-mail</th>
                            <th class="align-middle" scope="col">Tip Korisnika</th>
                            <th class="align-middle" scope="col">Operacija</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            @while ($i <= $counter)
                                @forelse ($users as $user)
                                    <tr>
                                        <th class="align-middle" scope="row">{{ $i++ }}</th>
                                        <td class="align-middle">{{ $user->name }}</td>
                                        <td class="align-middle">{{ $user->email }}</td>
                                        <td class="align-middle">{{ $user->user_type }}</td>
                                        <td class="align-middle">
                                            <div class="btn-toolbar" aria-label="buttons">
                                                <a class="col text-center align-middle"
                                                    href="/users/{{ $user->id }}/password">
                                                    <button class="btn fst-italic fw-bolder btn-sm btn-warning">IZMJENA
                                                        LOZINKE</button>
                                                </a>
                                                <a class="col text-center align-middle"
                                                    href="/users/{{ $user->id }}/edit">
                                                    <button class="btn fst-italic fw-bolder btn-sm btn-success ms-2">UREDI
                                                        KORISNIKA</button>
                                                </a>
                                                <form class="col mx-3 text-center" action="/users/{{ $user->id }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button typle="submit"
                                                        class="btn fst-italic fw-bolder btn-sm btn-danger">OBRIŠI</button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" style="text-align:center" class="fst-italic">(Nema Podataka)
                                        </td>
                                    </tr>
                                @endforelse
                            @endwhile
                        </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
