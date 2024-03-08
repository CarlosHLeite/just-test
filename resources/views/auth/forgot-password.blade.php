<x-layout>

    <!-- Login 13 - Bootstrap Brain Component -->
    <section class="h-100 d-flex justify-content-center align-items-center background-gradient">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <div class="card border border-light-subtle rounded-3 card-shadow">
                <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="text-center mb-3">

                    <img src="./images/logo.svg" alt="BootstrapBrain Logo" width="175" height="57">

                </div>
                <h2 class="fs-5 fw-500 text-center text-secondary mt-4 mb-4">Esqueceu sua Senha?</h2>

                <p class="fs-6 fw-normal text-center mb-4">Nos informe seu email que iremos te enviar um link para que você possa mudar sua senha!</p>

                <form action="#!">
                    <div class="row gy-2 overflow-hidden">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                            <label for="email" class="form-label">Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex gap-2 justify-content-end">
                            <a href="/" class="link-success text-decoration-none">Entrar na sua conta</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid my-3">
                            <button class="btn btn-success btn-lg" type="submit">Enviar</button>
                            </div>
                        </div>

                        <x-whatsAppBtn />

                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

</x-layout>
