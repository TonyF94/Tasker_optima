@extends('system.app')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                {{-- sezione iniziale --}}
                <section class="d-flex justify-content-center align-items-center flex-column p-4">
                    <h1 class="text-center">Cattura, organizza e affronta le tue cose da fare ovunque tu sia.</h1>
                    <p class="text-center">Scappa dal disordine e dal caos, libera la tua produttività con Optima Task.
                    </p>
                    {{-- form di login al sito --}}

                    <form class="row g-3 mt-4">
                        <div class="col-auto ">
                            <label for="email" class="visually-hidden">Password</label>
                            <input type="text" class="form-control" id="email"
                                placeholder="Inserisci la tua email">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Iscriviti</button>
                        </div>
                    </form>
                </section>
            </div>

            <div class="col-6 text-center">
                <img src="{{ Storage::url('copertina.jpg') }}" alt="home" class="">
            </div>
        </div>


        {{-- seconda sezione --}}

        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                <img src="{{ Storage::url('email-todos.webp') }}" alt="home" class="">
            </div>

            <div class="col-6 text-center">
                <section class="d-flex justify-content-center align-items-center flex-column p-4">
                    <h2 class="text-center">Dimentica i foglietti sparsi ovunque.</h2>
                    <p class="text-center">Abbandona il disordine e ritrova la tua produttività con Optima Task, il modo
                        migliore per organizzare le tue attività senza stress.</p>
                </section>
            </div>
        </div>
