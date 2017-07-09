# Laravel em ação - Novatec

Repositório dedicado exclusivamente para os exemplos desenvolvidos no livro. Para cada capítulo existe uma pasta correspondente com um projeto Laravel completo.

```
|__ capitulo1
      |___ projeto laravel
    capitulo2
      |___ projeto laravel
    capitulo3
      |___ projeto laravel
```

Cada projeto Laravel possui suas próprias dependências, o que torna obrigatório a execução do composer. Para ilustrar melhor a seguir executamos a instalação das dependências do capítulo 1

Entramos na pasta correspondente ao capítulo (levando em consideração que estamos na raiz do projeto clonado)
```
cd capitulo1/
```
E executamos o composer
```
composer install -vv
```
Após isso, basta executar o Artisan para criar um servidor local na porta 8000
```
php artisan serve
```
E por último acessar os exemplos do capítulo através do navegador, que nesse caso utilizamos o firefox
```
firefox http://localhost:8000
```

Obs: Se estiver usando o homestead, não esqueça de redirecionar as portas desejadas no arquivo de configuração `Homestead.yml`, caso contrário, não será possível acessar a aplicação no navegador

# Conteúdo do Livro (Índice)

- Capítulo 1
  - Introdução
- Capítulo 2
  - Introdução ao ambiente Laravel (não possui código)
- Capítulo 3
  - Rotas
- Capítulo 4
  - Arquitetura Laravel
- Capítulo 5
  - Middlewares
- Capítulo 6
  - Controladores (Controllers)
- Capítulo 7
  - Respostas HTTP (Não possuí codigo)
- Capítulo 8 
  - Views
- Capítulo 9
  - Recursos de layout
- Capítulo 10
  - Elixir
- Capítulo 11
  - Cache
- Capítulo 12
  - Validações
- Capítulo 13
  - Enviando emails
- Capítulo 14
  - Configurando banco de dados
- Capítulo 15
  - Migrações
- Capítulo 16
  - Eloquent ORM
- Capítulo 17
  - Autenticação

