let formCadastro = document.getElementById('form-cadastro');

formCadastro.addEventListener('submit', function(event) {
    let senha = document.getElementById('senha').value;
    let confirmaSenha = document.getElementById('confirma-senha').value;

    if (senha !== confirmaSenha) {
        alert('As senhas não conferem!');
        event.preventDefault();
    }
});
