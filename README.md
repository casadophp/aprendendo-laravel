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
