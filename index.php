<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tecnologia Git</title>
    </head>
    <body>
        <!--
            Comandos Git
            Obs: primeiro devemos, através do prompt de comando, ir até o diretório principal do projeto antes de usar o Git.
            1 - inicializar um repositório local: git init
            2 - comandos para configurações personalizadas do projeto no repositório local
                2.1 - nome completo do usuario do projeto: git config --global user.name "Guilherme Grillo"
                Obs: -- global que dizer que vai se referir a todo o repositorio
                2.1 - retorna o nome completo do usuario do projeto definido em 2.1: git config --global user.name
                Obs: existem outras configurações personalizadas que podem ser feitas como e-mail, etc.
            3 - monitorar o status (situação) dos arquivos do projeto: git status
                Obs: quando algum novo arquivo for adicionado ao projeto, será necessário usar o comando abaixo para permitir ao
                Git rastrea-lo (tracker) e poder registrar as suas atualizações a partir deste momento.
                comando: git add "index.php"
                Obs: para adicionar todos os arquivos/pastas inseridos no projeto até então, será necessário usar o seguinte comando
                git add -A
            4 - comando que mostra em detalhes quais alterações foram feitas nos arquivos do projeto: git diff
            5 - commit serve para salvarmos no repositório a versão do projeto. A cada novo commit, uma nova versão é salva no
            repositorio, sendo possivel a recuperação de versoes anteriores. Comando para isso: git commit -m "meu commit novo"
                obs: sempre dar um git add -A antes do commit para salvar as alterações primeiro antes de enviar ao repositorio 
                5.1 - comando para ver o historio de todos os commits (versoes) feitos do projeto no repositorio:
                git log
            6 - Branch: um branch representa um repositorio que conterá todos os commits (versoes) do projeto. O Git permite criar
            mais um de um brach para termos mais de um repositorio do projeto, sendo que cada alteração que ocorrer irá corresponder
            ao branch desse projeto em específico.
                6.1 - mostra todos os branchs do projeto: git branch
                6.2 - cria um novo branch: git branch "novo_branch"
                6.3 - muda do branch atual para esse novo branch: git checkout "outro_branch"
        -->

        <?php
            echo 'Olá da Danki Code!';

            function teste() {
                return 'danki code';
            }
        ?>
    </body>
</html>