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

  

