<section>

    <!-- CARD PRINCIPAL -->
    <div class="card border-0 shadow-lg rounded-5 overflow-hidden">

        <!-- HEADER -->
        <div
            class="text-white p-5"
            style="
                background: linear-gradient(
                    135deg,
                    #004d98,
                    #7c3aed
                );
            "
        >

            <h2 class="fw-bold mb-2">
                Información del Perfil ⚽
            </h2>

            <p class="mb-0 fs-5">
                Actualiza la información de tu cuenta de Typing Messi.
            </p>

        </div>

        <!-- BODY -->
        <div class="p-5 bg-white">

            <!-- FORM VERIFICACIÓN -->
            <form
                id="send-verification"
                method="post"
                action="{{ route('verification.send') }}"
            >

                @csrf

            </form>

            <!-- FORMULARIO -->
            <form
                method="post"
                action="{{ route('profile.update') }}"
            >

                @csrf
                @method('patch')

                <!-- NOMBRE -->
                <div class="mb-4">

                    <label class="form-label fw-bold">

                        Nombre Completo

                    </label>

                    <x-text-input
                        id="name"
                        name="name"
                        type="text"
                        class="form-control rounded-4 p-3 shadow-sm border-0"
                        :value="old('name', $user->name)"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Ingrese su nombre"
                    />

                    <x-input-error
                        class="mt-2 text-danger"
                        :messages="$errors->get('name')"
                    />

                </div>

                <!-- EMAIL -->
                <div class="mb-4">

                    <label class="form-label fw-bold">

                        Correo Electrónico

                    </label>

                    <x-text-input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control rounded-4 p-3 shadow-sm border-0"
                        :value="old('email', $user->email)"
                        required
                        autocomplete="username"
                        placeholder="Ingrese su correo"
                    />

                    <x-input-error
                        class="mt-2 text-danger"
                        :messages="$errors->get('email')"
                    />

                    <!-- VERIFICACIÓN -->
                    @if (
                        $user instanceof
                        \Illuminate\Contracts\Auth\MustVerifyEmail
                        &&
                        ! $user->hasVerifiedEmail()
                    )

                        <div
                            class="alert alert-warning rounded-4 mt-4"
                        >

                            <p class="mb-2 fw-semibold">

                                Tu correo electrónico no ha sido verificado.

                            </p>

                            <button
                                form="send-verification"
                                class="btn btn-warning rounded-4 fw-bold"
                            >

                                Reenviar verificación

                            </button>

                            @if (
                                session('status')
                                ===
                                'verification-link-sent'
                            )

                                <p class="mt-3 text-success fw-bold">

                                    Se envió un nuevo enlace
                                    de verificación ✅

                                </p>

                            @endif

                        </div>

                    @endif

                </div>

                <!-- BOTONES -->
                <div class="d-flex align-items-center gap-3 mt-5">

                    <button
                        type="submit"
                        class="btn btn-lg text-white fw-bold rounded-4 shadow px-5"
                        style="
                            background: linear-gradient(
                                135deg,
                                #004d98,
                                #7c3aed
                            );
                            border:none;
                            transition:0.3s;
                        "

                        onmouseover="this.style.transform='scale(1.05)'"
                        onmouseout="this.style.transform='scale(1)'"
                    >

                        Guardar Cambios ⚽

                    </button>

                    @if (
                        session('status')
                        ===
                        'profile-updated'
                    )

                        <div
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2500)"
                            class="alert alert-success mb-0 rounded-4 px-4 py-2"
                        >

                            Perfil actualizado correctamente ✅

                        </div>

                    @endif

                </div>

            </form>

        </div>

    </div>

</section>