<?php

namespace App\Http\Middleware;

use Closure;

class verificarProdutos
{
    private $iterator;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->setIterator($request->quantidade)->verificarProdutos()) {
            throw new \Exception("Atenção: Infelizmente nossa loja ainda não consegue vender mais de 1 mouse por cliente. Desculpe-nos pelo inconveniente! ");
        } else {
            return $next($request);
        }
    }

    protected function setIterator($quantidade) {
        $this->iterator = (new \ArrayObject($quantidade))->getIterator();
        return $this;
    }

    protected function verificarProdutos() {
        for ($iterator = $this->iterator; $iterator->valid(); $iterator->next()) {
            if ($iterator->current() > 1) {
                return true;
            }
        }
    }
}
