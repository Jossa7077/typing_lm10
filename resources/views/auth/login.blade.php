<x-guest-layout>

    <!-- STATUS -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <!-- TÍTULO -->
    <div class="text-center mb-4">

        <h2 class="fw-bold"
            style="color:#004d98;">

            Iniciar Sesión ⚽

        </h2>

        <p class="text-muted">

            Accede a tu cuenta para ingresar
            al panel de Typing Messi.

        </p>

    </div>

    <!-- FORMULARIO -->
    <form method="POST" action="{{ route('login') }}">

        @csrf

        <!-- EMAIL -->
        <div class="mb-4">

            <label class="form-label fw-bold">

                Correo Electrónico

            </label>

            <x-text-input
                id="email"
                class="form-control rounded-4 p-3 shadow-sm border-0"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                autocomplete="username"
                placeholder="Ingrese su correo"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2 text-danger"
            />

        </div>

        <!-- PASSWORD -->
        <div class="mb-4">

            <label class="form-label fw-bold">

                Contraseña

            </label>

            <x-text-input
                id="password"
                class="form-control rounded-4 p-3 shadow-sm border-0"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Ingrese su contraseña"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2 text-danger"
            />

        </div>

        <!-- RECORDAR -->
        <div class="form-check mb-4">

            <input
                id="remember_me"
                type="checkbox"
                class="form-check-input"
                name="remember"
            >

            <label
                class="form-check-label"
                for="remember_me"
            >

                Recordarme

            </label>

        </div>

        <!-- BOTÓN -->
        <button
            type="submit"
            class="btn w-100 py-3 rounded-4 fw-bold shadow-lg text-white"
            style="
                background: linear-gradient(
                    135deg,
                    #004d98,
                    #a50044
                );
                border:none;
                transition:0.3s;
            "

            onmouseover="this.style.transform='scale(1.03)'"
            onmouseout="this.style.transform='scale(1)'"
        >

            Ingresar ⚽

        </button>

        <!-- FORGOT -->
        @if (Route::has('password.request'))

            <div class="text-center mt-4">

                <a
                    class="text-decoration-none fw-semibold"
                    style="color:#004d98;"
                    href="{{ route('password.request') }}"
                >

                    ¿Olvidaste tu contraseña?

                </a>

            </div>

        @endif

    </form>

</x-guest-layout>
