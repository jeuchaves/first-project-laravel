@if ($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
@endif

<form action="{{ route('login.auth')}}" method="post" class="col s12">
    @csrf
    <div class="row">
        <div class="col s12">

        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input class="validate" type="email" name="email" id="email">
            <label for="email">Digite seu email</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input class="validate" type="password" name="password" id="password">
            <label for="password">Digite sua senha</label>
        </div>
        <label style="float: right">
            <a href="#!" class="pink-text"><b>Esqueceu sua senha?</b></a>
        </label>
    </div>
    <div class="row">
        <button class="col s12 btn btn-large waves-effect indigo" name="btn_login" type="submit">Entrar</button>
    </div>
</form>