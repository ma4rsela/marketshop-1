<x-layout_base>

<div class="flex flex-col items-center justify-center min-h-screen">
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Tela de Login</title>
  <style>

    body {
      background-color: #333333 ; /* Cor de fundo branco */
      font-family: Arial, sans-serif;
    }
    .login-container {
      width: 500px;
      margin: 100px auto;
      padding: 40px;
      background-color: #DCDCDC; /* Cor de fundo branco */
      border-radius: 5px;
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center ;
      color: #333333; /* Cor do texto azul escuro */
      padding: 20px;
      font-family: cambria, sans-serif;
    }

    h2 {
      text-align: ;
      color: #333333; /* Cor do texto azul escuro */
    }
    input[type="email"],
    input[type="password"],
    button {


        color: #87CEEB; 
      width: 100%;
      margin-bottom: 10px;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #333333; /* Cor da borda cinza */
      border-radius: 3px;
    }
    button {
      background-color: #3498db; /* Cor de fundo azul */
      color: #333333; /* Cor do texto branco */
      cursor: pointer;
    }
    button:hover {
      background-color: #2980b9; /* Cor de fundo azul mais escuro no hover */
    }
  </style>
</head>
<body>

<div class="login-container"> 

 <h1>Tela de Login</h1>

  <h2>Email</h2>


  <form action ="{{route('logar')}}" method="POST">
    @csrf
  
    <input type="email" id="email" name="email" clas= required> 
    
    <h2>Senha</h2>
    <input type="password" id="password" name="senha" class= required>
    <button type="submit">Entrar</button>
  </form>
</div>

</body>
</html>




</x-layout_base>
