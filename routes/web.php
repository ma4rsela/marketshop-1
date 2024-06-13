    <?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Models\Produto;

    Route::get('/home', function () {
        return view('welcome');
    });

    //Route::view('/', 'home');

    Route::get('/', function() {

    //dd(Produto::all());

        $ListaProdutos = Produto::all();

        return view('home', compact('ListaProdutos'));
    });

    Route::view('/cria-conta', 'cria-conta');



    Route::view('/testedeconteudo', 'teste');

    Route::post('/salva-usuario',
    function (Request $request) {

        //dd($request);


        $usuario = new User();

        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = $request->senha;
    $usuario->save();
    dd("salvo com sucesso!!");


        // dd($request);

        $usuario = new User();
        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = $request->senha;
        $usuario->save();
        dd("Salvo com sucesso!!");


    })->name('salva-usuario');

//------------------------------PRODUTOS--------------------------------


Route::view('/cadastra-produto', 'cadastra-produto')->middleware('auth');

Route::post('salva-produto',
function (Request $request) {
    //dd($request);

    $produto = new Produto();
    $produto->nome = $request->nome;
    $produto->descricao = $request->descricao;
    $produto->valor = $request->valor;



    //pega arquivo enviado
    $file = $request->file('foto');

    //salva na pasta fotos, subpasta produtos
    $foto = $file->store('produtos',['disk' => 'fotos']);

    //adiciona foto ao produto
    $produto->foto= $foto;

    //pega id do usuário que salvou a foto
    $produto->user_id = 1;//SERA MODIFICADO PARA PEGAR O USUSARIO LOGADO

    //salva produto no banco
    $produto->save();

    //dd("Salvo com sucesso!!")->middleware('auth');
    return redirect('/');

})->name('salva-produto')->middleware('auth');



//----login-------
Route::view('/login','login')->name("login");

Route::post('/logar', function (Request $request){

    //dd($request);

return redirect('/login');



//verifica se a pessoa preencheu os campos de login
$credentials = $request->validate([
'email' => ['required', 'email'], //verificar se tem email e se é email
'senha' => ['required'], //verificar se tem senha

]);

//compara se os dados no banco são iguais o que ele preencheu
if(Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
    //cria sessão do usuario logado
    $request->session()->regenerate();
    //redireciona para a tela de cadastro de produtos
    return redirect()->intended('/cadastra-produto');
}
else{
    dd("Usuário ou senha incorretos");

}
})->name('logar');

Route::get('/sair', function (){
Auth::logout();
return redirect('/');

});