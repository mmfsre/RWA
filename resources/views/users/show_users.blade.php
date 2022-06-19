@extends('layouts.app_absolute_footer')

@section('content')
    <section id="portfolio" class="portfolio">
        <div class="table-center container mx-6 my-2">
            <div class="section-title">
                <h2>Korisnici</h2>
            </div>
            <div class="row mx-3 my-2">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <table class="table table-hover">
                        <div class="row">
                            @can('create', App\Models\User::class)
                                <div class="col-lg-3 d-inline col-sm-5 col-5 align-items-start justify-content-evenly mt-1 mb-3">
                                    <a href="/users/create">
                                        <button class="btn btn-danger fw-bold">NOVI KORISNIK</button>
                                    </a>
                                </div>
                                <!-- Obavijest za Create, Update i Delete -->
                                <div
                                    class="col-lg-8 col-sm-5 col-5 d-inline align-items-start justify-content-evenly mt-2 ms-3">
                                    @if (session()->has('message'))
                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </symbol>
                                        </svg>
                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="50" height="18" role="img"
                                                aria-label="Success:">
                                                <use xlink:href="#check-circle-fill" />
                                            </svg>
                                            <div class="fst-italic fw-bold">
                                                {{ session()->get('message') }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endcan
                </div>
                <thead>
                    <tr>
                        <th class="align-middle" scope="col">#</th>
                        <th class="align-middle" scope="col">Korisnik</th>
                        <th class="align-middle" scope="col">Email</th>
                        <th class="align-middle" scope="col">Tip Korisnika</th>
                        <th class="align-middle" scope="col">Dozvola</th>
                        <th class="align-middle" scope="col">Operacija</th>
                    </tr>
                </thead>
                <tbody class="fst-italic">
                    <div class="col-lg-12 col-md-6 col-sm-5 col-5 portfolio-item filter-app">
                        @while ($i <= $counter)
                            @foreach ($users as $user)
                                <tr>
                                    <th class="align-middle" scope="row">{{ $i++ }}</th>
                                    <td class="align-middle">{{ $user->name }}</td>
                                    <td class="align-middle">{{ $user->email }}</td>
                                    <!-- Dodao sam da mi upiše "(none)" dok nije bilo ni rola ni permisija u BAZI -->
                                    <td class="align-middle"> {{ $user->role->name ?? '(none)' }}</td>
                                    <td class="align-middle ps-0">
                                        <ol type="1">
                                            @if ($user->role_id != '')
                                                @foreach ($user->role->permissions as $permission)
                                                    <li>
                                                        {{ $permission->name }}
                                                    </li>
                                                @endforeach
                                            @else
                                                {{ $user->role_id ?? '(none)' }}
                                            @endif
                                        </ol>
                                    </td>
                                    <td class="align-middle" style="width: 40%">
                                        <div class="btn-toolbar" aria-label="buttons">
                                            @can('update', $user)
                                                <a class="col text-center align-middle" href="/users/{{ $user->id }}/edit">
                                                    <button class="btn fst-italic fw-bolder btn-sm btn-success">UREDI
                                                        KORISNIKA</button>
                                                </a>
                                            @endcan
                                            @can('update', $user)
                                                <a class="col text-center align-middle"
                                                    href="/users/{{ $user->id }}/password">
                                                    <button class="btn fst-italic fw-bolder btn-sm btn-warning ms-2">IZMJENA
                                                        LOZINKE</button>
                                                </a>
                                            @endcan
                                            @can('delete', $user)
                                                <form class="col mx-3 text-center" action="/users/{{ $user->id }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button typle="submit"
                                                        class="btn fst-italic fw-bolder btn-sm btn-danger">OBRIŠI</button>
                                                </form>
                                            @endcan

                                            <!-- Ispiši poruke zabrane, ako je ADMIN -->
                                            @isset($set)
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="exclamation-triangle-fill" fill="currentColor"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                    </symbol>
                                                </svg>
                                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                    <svg class="bi flex-shrink-0 me-0" width="65" height="20"
                                                        role="img" aria-label="Danger:">
                                                        <use xlink:href="#exclamation-triangle-fill" />
                                                    </svg>
                                                    <div>
                                                        Oops! Nemate pristupa!
                                                    </div>
                                                </div>
                                            @endisset
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endwhile
                    </div>
                </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
@endsection
