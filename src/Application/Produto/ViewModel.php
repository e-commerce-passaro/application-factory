<?php
namespace Ecompassaro\Application\Factory\Produto;

use Ecompassaro\Application\Produto\ViewModel as ProdutosViewModel;
use Ecompassaro\Acesso\Factory\ViewModel as AcessoViewModelFactory;
use Interop\Container\ContainerInterface;

class ViewModel extends AcessoViewModelFactory
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ProdutosViewModel(
            $this->getAcesso($container),
            $container->get('ProdutoManager')
        );

    }
}
