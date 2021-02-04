<?php


namespace Chinmaya\FirstModule\Controller\Page;
use \Magento\Framework\App\ResponseInterface;

use Chinmaya\FirstModule\NotMagento\PencilInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action {

   
    protected $pencilInterface;

    // public function __construct(PencilInterface $pencilInterface)
    // {
    //     $this->pencilInterface = $pencilInterface;
    // }



    public function execute(){
        echo "Hello World";

       //echo $this->pencilInterface->getPencilType();
    }
}
?>