<x-layouts::gest>
    <x-compo.admin.header>
    </x-compo.admin.header>
    <x-compo.admin.sidebar>
    </x-compo.admin.sidebar>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h4>Login Administrativo</h4>
                    </div>
                    <div class="card-body">
                        <form method="get" action="{{ route('login') }}">
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite seu email" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Digite sua senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block w-100">
                                Entrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layouts::gest>
