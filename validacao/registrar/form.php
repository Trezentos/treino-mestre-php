<form action="/treino/formulario/validacao/registrar-controller.php" method="post" class="p-4 space-y-4">

        <div class="flex flex-col">
            <label for="" class="text-stone-500 mb-1">Nome</label>
            <input
                    type="text"
                    name="nome"
                    class="border-stone-800 border-2 border rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 "
                    placeholder="Nome"
            >
        </div>
        <div class="flex flex-col">
            <label for="" class="text-stone-500 mb-1">Email</label>
            <input
                    type="text"
                    name="email"
                    class="border-stone-800 border-2 border rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 "
                    placeholder="E-mail"
            >
        </div>
        <div class="flex flex-col">
            <label for="" class="text-stone-500 mb-1">Confirmar Email</label>
            <input
                    type="email"
                    name="email_confirmacao"
                    class="border-stone-800 border-2 border rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 "
                    placeholder="Confirme o seu e-mail"
            >
        </div>
        <div class="flex flex-col">
            <label for="" class="text-stone-500 mb-1">Senha</label>
            <input
                    type="password"
                    name="senha"
                    class="border-stone-800 border-2 border rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 "
                    placeholder="Password"
            >
        </div>

        <button type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
            Registrar
        </button>

</form>