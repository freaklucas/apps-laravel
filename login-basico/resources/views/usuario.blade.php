@auth

    <h4>Seja bem vindo o/</h4>

    <p> {{ Auth::user()->name }} </p>
    <p> {{ Auth::user()->email }} </p>
    <p> {{ Auth::user()->id }} </p>

@endauth

@guest
    <h4>Você não está logado, faça o login corretamente!</h4>
@endguest