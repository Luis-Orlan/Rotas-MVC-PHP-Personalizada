<main>
    <br/><br/>
    <a href="\">Voltar para home</a>
    <br/><br/>
   <div class='txt-center'>
        <form id="login" class="login">
            <label for="email">E-mail </label>
            <br/>
            <input type="email" name="email" id="email" Placeholder="E-mail" required/>
            <br/><br/>

            <label for="senha">Senha</label>
            <br/>
            <input type="password" name="senha" id="senha" Placeholder="Senha" required/>
            <br/><br/>

            <input type="hidden" name="token" value="Login" required/>
            <input type="hidden" name="key" value="Acesso" required/>
            <input type="checkbox" name="lembrar" />
            
            <button type="button" class="btn-login">Logar</button>
            <br> <br>
            <span id='return'></span>
        </form>
   </div>
</main>