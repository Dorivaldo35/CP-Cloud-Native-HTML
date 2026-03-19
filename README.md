# CP-Cloud-Native-HTML
Uma pagina web estática em um container Docker 

# 1: Criar a Estrutura de Diretórios

   1.1 Crie uma pasta para o projeto
  mkdir lab1-docker
  cd lab1-docker
  
  1.2 Crie uma pasta para os arquivos da página web
  mkdir website

  1.3 Entre na pasta website
  cd website

# 2: Criar o Arquivo index.html

2.1 Crie o arquivo index.html
  nano index.html
  Cole o seu codigo:

  <img width="616" height="464" alt="image" src="https://github.com/user-attachments/assets/e52786cd-7f6f-4189-b67a-9edbcb92e0e9" />

  Salve com Ctrl + O, Enter e saia com Ctrl + X

# 3: Adicionar uma Imagem

  3.1 Baixe uma imagem de preferencia e copie para esta past: cp /caminho/da/sua/imagem.jpg website/minha-imagem.jpg

 # 4 Criar o Dockerfile (na raiz do projeto)

     <img width="594" height="178" alt="image" src="https://github.com/user-attachments/assets/99f05b3d-e4e1-443a-ad3c-5f4a7d05a877" />

  Salve com Ctrl + O, Enter e saia com Ctrl + X

# 5: Construir a Imagem Docker

  Construa a imagem (substitua "minha-imagem-web" pelo nome que preferir)
  docker build -t minha-imagem-web.

  # 6: Executar o Container com Bind Mount

    <img width="371" height="132" alt="image" src="https://github.com/user-attachments/assets/5eebbf88-32a6-4ea1-877e-fcf2ca4be88b" />

# 7: Verificar se Está Funcionando

  7.1 Liste os containers em execução
  docker ps
  
  7.2 Acesse no navegador: http://localhost:8080



  


# LAB 2 - PHP + MySQL em Containers Docker


# 1: Criar a Aplicação PHP

   1.1 Crie uma pasta para o projeto:

   1.2 kdir nome-lab-php-mysql
   cd nome-lab-php-mysql

   1.3 Arquivo index.php (Página principal)

   <img width="1142" height="1002" alt="image" src="https://github.com/user-attachments/assets/351d3f6d-fa57-4865-a182-656ebfb4ae5d" />

   1.4 Arquivo info.php (Para testar PHP)

   <img width="234" height="174" alt="image" src="https://github.com/user-attachments/assets/4aebbb8e-c54e-4f82-9484-d65602615564" />

# 2: Criar o Dockerfile da Aplicação PHP

   2.1 Crie um arquivo chamado Dockerfile (sem extensão):

   <img width="906" height="862" alt="image" src="https://github.com/user-attachments/assets/419e2782-6c3e-4cf7-8f21-d01b1006a3e2" />

# 3: Criar o Volume Docker para Persistência

   3.1 Execute no terminal: docker volume ls

# 4: Subir o Container MySQL

   <img width="682" height="334" alt="image" src="https://github.com/user-attachments/assets/509a014b-f0f1-4303-a66a-0c94ad210e66" />

   Explicação dos parâmetros:
   -d: Executa em background (detached)
   
   --name mysql-container: Nome do container (importante para o PHP conectar)
   
   -e MYSQL_ROOT_PASSWORD: Senha do root
   
   -e MYSQL_DATABASE: Cria o banco automaticamente
   
   -v mysql_data:/var/lib/mysql: Volume para persistência (REQUISITO 5)
   
   -p 3306:3306: Mapeia a porta
   
   mysql:8.0: Imagem oficial do MySQL

5: Aguardar o MySQL Inicializar

   5.1 guarde 30-60 segundos para o MySQL estar pronto: docker build -t php-app-lab2 .


# 6: Construir a Imagem da Aplicação PHP

   6.1 No diretório do projeto (onde está o Dockerfile): docker build -t php-app-lab2 .
   
# 7: Executar o Container PHP

   docker run -d \
   --name php-container \
   --link mysql-container:mysql \
   -p 8081:80 \
   php-app-lab2


# 8: Verificar se os Containers Estão Rodando

   8.1 Comando: docker ps


# 9: Testar a Aplicação

   curl http://localhost:8081
   
   
   <img width="1098" height="702" alt="image" src="https://github.com/user-attachments/assets/e4dacd45-0e2d-443e-8c46-b5af6a69066e" />




