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
                5.2 - comando para realizar adicao de novos arquivos e alterações e commits ao mesmo tempo no repositorio. Muito
                util em situações que não se deseja ter que ficar trackeando cada arquivo novo por vez que for adicionado para 
                depois comitar: git add -A && git commit -m "Novo commit"
                5.3 - recuperar commits (versoes) antigos: git reset --hard código_do_commit
            6 - Branch: um branch representa um repositorio que conterá todos os commits (versoes) do projeto. O Git permite criar
            mais um de um brach para termos mais de um repositorio do projeto, sendo que cada alteração que ocorrer irá corresponder
            ao branch desse projeto em específico.
                6.1 - mostra todos os branchs do projeto: git branch
                6.2 - cria um novo branch: git branch "novo_branch"
                6.3 - muda do branch atual para esse novo branch: git checkout "outro_branch"
            
            - INTEGRANDO REPOSITÓRIO LOCAL GIT COM REPOSITÓRIO REMOTO DO GITHUB
            1 - gerar uma chave SSH para autenticar o computador onde o projeto se encontra com o GitHub:
            comando: ssh-keygen -t rsa -b 4096 -C "your_email@example.com"
            onde "your_email@example.com" corresponde ao e-mail da conta do usuario no github
            2 - após esse comando, ir ao local onde o arquivo (id_rsa.pub) com a chave publica foi gerada, pegar essa chave e registrá-la
            na conta do github (menu settings, opcao SSH and GPG Keys)
            3 - criar um novo respositorio no git hub
            4 - commit remoto no repositorio do github

            - INTEGRAÇÃO
            1 - git remote -v - exibe a url do respositorio remoto que estamos trabalhando
            2 - git remote rm origin - remove a url existente do repositorio que estamos trabalhando
            3 - git remote add origin url_do_repositorio_remoto - conecta o repositorio local a url do repositorio remoto do github
            Desse ponto em diante, podemos fazer commits remotos para este repositorio
            4 - git pull origin master - importar repositorio remoto para o local
            5 - git push origin master - exportar repositorio local para o remoto
        -->

        <?php
            echo 'Olá da Danki Code!';

            function teste() {
                return 'danki code';
            }
        ?>
    </body>
</html>